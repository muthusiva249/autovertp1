<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class UserDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.user-dashboard';
    protected static ?string $navigationLabel = 'User Dashboard';
    protected static ?string $navigationGroup = 'User Panel';
    
    public $workflows; // To store workflows
    public $fields; // To store fields

    public function mount()
    {
        // Initialize data for workflows and fields
        $this->workflows = Workflow::orderBy('order')->get();
        $this->fields = Field::all();
    }

}
