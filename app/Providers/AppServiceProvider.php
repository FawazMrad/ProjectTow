<?php

namespace App\Providers;

use App\Repositories\AdministrativeRequestRepository;
use App\Repositories\AppointmentImageRepository;
use App\Repositories\AppointmentRepository;
use App\Repositories\AttendanceLogRepository;
use App\Repositories\BadgeRepository;
use App\Repositories\BillRepository;
use App\Repositories\FamilyRepository;
use App\Repositories\Interfaces\AdministrativeRequestRepositoryInterface;
use App\Repositories\Interfaces\AppointmentImageRepositoryInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;
use App\Repositories\Interfaces\BadgeRepositoryInterface;
use App\Repositories\Interfaces\BillRepositoryInterface;
use App\Repositories\Interfaces\FamilyRepositoryInterface;
use App\Repositories\Interfaces\InventoryItemRepositoryInterface;
use App\Repositories\Interfaces\MedicalStudyRepositoryInterface;
use App\Repositories\Interfaces\MonthlyInventorySnapshotRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\Interfaces\PatientRepositoryInterface;
use App\Repositories\Interfaces\PatientSubscriptionRepositoryInterface;
use App\Repositories\Interfaces\PaymentRepositoryInterface;
use App\Repositories\Interfaces\PreventiveCarePlanRepositoryInterface;
use App\Repositories\Interfaces\SubscriptionPlanRepositoryInterface;
use App\Repositories\Interfaces\TrainerBadgeRepositoryInterface;
use App\Repositories\Interfaces\TrainingSessionRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\WeeklyScheduleRepositoryInterface;
use App\Repositories\InventoryItemRepository;
use App\Repositories\MedicalStudyRepository;
use App\Repositories\MonthlyInventorySnapshotRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\PatientRepository;
use App\Repositories\PatientSubscriptionRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\PreventiveCarePlanRepository;
use App\Repositories\SubscriptionPlanRepository;
use App\Repositories\TrainerBadgeRepository;
use App\Repositories\TrainingSessionRepository;
use App\Repositories\UserRepository;
use App\Repositories\WeeklyScheduleRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BadgeRepositoryInterface::class, BadgeRepository::class);
        $this->app->bind(TrainerBadgeRepositoryInterface::class, TrainerBadgeRepository::class);
        $this->app->bind(TrainingSessionRepositoryInterface::class, TrainingSessionRepository::class);
        $this->app->bind(AttendanceLogRepositoryInterface::class, AttendanceLogRepository::class);
        $this->app->bind(AdministrativeRequestRepositoryInterface::class, AdministrativeRequestRepository::class);
        $this->app->bind(InventoryItemRepositoryInterface::class, InventoryItemRepository::class);
        $this->app->bind(MonthlyInventorySnapshotRepositoryInterface::class, MonthlyInventorySnapshotRepository::class);
        $this->app->bind(WeeklyScheduleRepositoryInterface::class, WeeklyScheduleRepository::class);
        $this->app->bind(MedicalStudyRepositoryInterface::class, MedicalStudyRepository::class);
        $this->app->bind(SubscriptionPlanRepositoryInterface::class, SubscriptionPlanRepository::class);
        $this->app->bind(FamilyRepositoryInterface::class, FamilyRepository::class);
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(PatientSubscriptionRepositoryInterface::class, PatientSubscriptionRepository::class);
        $this->app->bind(BillRepositoryInterface::class, BillRepository::class);
        $this->app->bind(PaymentRepositoryInterface::class, PaymentRepository::class);
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
        $this->app->bind(AppointmentImageRepositoryInterface::class, AppointmentImageRepository::class);
        $this->app->bind(PreventiveCarePlanRepositoryInterface::class, PreventiveCarePlanRepository::class);
        $this->app->bind(NotificationRepositoryInterface::class, NotificationRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
