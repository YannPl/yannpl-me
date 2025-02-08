<?php

namespace App\Livewire\Admin\Pages\Article;

use App\Models\RichContent;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleEditorForm extends Form
{
    #[Validate('required|string|min:20')]
    public string $title = '';

    #[Validate('required|string|min:20|max:100')]
    public string $seoTitle = '';

    #[Validate('string')]
    public string $seoDescription = '';

    #[Validate('string')]
    public string $mainImage = '';

    public function setContent(RichContent $articleContent): void
    {
        $this->title = $articleContent->title;
        $this->seoTitle = $articleContent->seo_title;
        $this->seoDescription = $articleContent->seo_description;
        $this->mainImage = $articleContent->main_image;
    }
}
