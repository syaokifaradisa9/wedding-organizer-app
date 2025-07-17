<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Repositories\Eloquent\RoleRepository;
use App\Repositories\Contracts\EventRepositoryInterface;
use App\Repositories\Eloquent\EventRepository;
use App\Repositories\Contracts\VendorRepositoryInterface;
use App\Repositories\Eloquent\VendorRepository;
use App\Repositories\Contracts\ChecklistItemRepositoryInterface;
use App\Repositories\Eloquent\ChecklistItemRepository;
use App\Repositories\Contracts\GuestRepositoryInterface;
use App\Repositories\Eloquent\GuestRepository;
use App\Repositories\Contracts\BudgetItemRepositoryInterface;
use App\Repositories\Eloquent\BudgetItemRepository;
use App\Repositories\Contracts\InvoiceRepositoryInterface;
use App\Repositories\Eloquent\InvoiceRepository;
use App\Repositories\Contracts\DocumentRepositoryInterface;
use App\Repositories\Eloquent\DocumentRepository;
use App\Repositories\Contracts\ActionLogRepositoryInterface;
use App\Repositories\Eloquent\ActionLogRepository;
use App\Repositories\Contracts\LeadRepositoryInterface;
use App\Repositories\Eloquent\LeadRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
        $this->app->bind(VendorRepositoryInterface::class, VendorRepository::class);
        $this->app->bind(ChecklistItemRepositoryInterface::class, ChecklistItemRepository::class);
        $this->app->bind(GuestRepositoryInterface::class, GuestRepository::class);
        $this->app->bind(BudgetItemRepositoryInterface::class, BudgetItemRepository::class);
        $this->app->bind(InvoiceRepositoryInterface::class, InvoiceRepository::class);
        $this->app->bind(DocumentRepositoryInterface::class, DocumentRepository::class);
        $this->app->bind(ActionLogRepositoryInterface::class, ActionLogRepository::class);
        $this->app->bind(LeadRepositoryInterface::class, LeadRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
