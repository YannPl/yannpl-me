<?php

namespace App\Livewire\Admin\Pages\Article;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleEditor extends Component
{
    use WithFileUploads;

    public ?int $articleId = null;

    public string $uuid = '';

    public bool $isPublished = false;

    public User $createdBy;

    public ArticleEditorForm $editForm;

    public function mount(Article $article): void
    {
        $this->articleId = $article->id;
        /** @var User $user */
        $user = Auth::user();
        $this->createdBy = $user;

        $this->editForm->setContent($article->currentRichContent()->sole());
    }

    public function saveArticle(): void
    {
        $this->editForm->validate();

        /** @var Article $article */
        $article = Article::find($this->articleId);
        $article->is_published = $this->isPublished;
        $article->save();

        $article->currentRichContent()->update([
            'title' => $this->editForm->title,
            'seo_title' => $this->editForm->seoTitle,
            'seo_description' => $this->editForm->seoDescription,
            'main_image' => $this->editForm->mainImage,
        ]);
    }
}
