<?php

use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboards.index.index');
})->name('index');
Route::get('/payments', function () {
    return view('admin.payments.payments.payments');
})->name('payments');
Route::get('/Analytics', function () {
    return view('admin.dashboards.Analytics.Analytics');
})->name('Analytics');
Route::get('/report_sales', function () {
    return view('admin.reports.report_sales.report_sales');
})->name('report_sales');
Route::get('/report_leads', function () {
    return view('admin.reports.report_leads.report_leads');
})->name('report_leads');
Route::get('/report_project', function () {
    return view('admin.reports.report_project.report_project');
})->name('report_project');
Route::get('/report_timesheets', function () {
    return view('admin.reports.report_timesheets.report_timesheets');
})->name('report_timesheets');
Route::get('/chat', function () {
    return view('admin.applications.chat.chat');
})->name('chat');
Route::get('/email', function () {
    return view('admin.applications.email.email');
})->name('email');
Route::get('/tasks', function () {
    return view('admin.applications.tasks.tasks');
})->name('tasks');
Route::get('/notes', function () {
    return view('admin.applications.notes.notes');
})->name('notes');
Route::get('/storage', function () {
    return view('admin.applications.storage.storage');
})->name('storage');
Route::get('/calendar', function () {
    return view('admin.applications.calendar.calendar');
})->name('calendar');
Route::get('/proposal', function () {
    return view('admin.proposals.proposal.proposal');
})->name('proposal');
Route::get('/proposal_view', function () {
    return view('admin.proposals.proposal_view.proposal_view');
})->name('proposal_view');
Route::get('/proposal_edit', function () {
    return view('admin.proposals.proposal_edit.proposal_edit');
})->name('proposal_edit');
Route::get('/proposal_create', function () {
    return view('admin.proposals.proposal_create.proposal_create');
})->name('proposal_create');
Route::get('/invoice_view', function () {
    return view('admin.payments.invoice_view.invoice_view');
})->name('invoice_view');
Route::get('/invoice_create', function () {
    return view('admin.payments.invoice_create.invoice_create');
})->name('invoice_create');
Route::get('/customers', function () {
    return view('admin.customers.customers.customers');
})->name('customers');
Route::get('/customers_view', function () {
    return view('admin.customers.customers_view.customers_view');
})->name('customers_view');
Route::get('/customers_create', function () {
    return view('admin.customers.customers_create.customers_create');
})->name('customers_create');
Route::get('/leads', function () {
    return view('admin.leads.leads.leads');
})->name('leads');
Route::get('/leads_view', function () {
    return view('admin.leads.leads_view.leads_view');
})->name('leads_view');
Route::get('/leads_create', function () {
    return view('admin.leads.leads_create.leads_create');
})->name('leads_create');
Route::get('/projects', function () {
    return view('admin.projects.projects.projects');
})->name('projects');
Route::get('/projects_view', function () {
    return view('admin.projects.projects_view.projects_view');
})->name('projects_view');
Route::get('/projects_create', function () {
    return view('admin.projects.projects_create.projects_create');
})->name('projects_create');
Route::get('/widgets_lists', function () {
    return view('admin.widgets.widgets_lists.widgets_lists');
})->name('widgets_lists');
Route::get('/widgets_tables', function () {
    return view('admin.widgets.widgets_tables.widgets_tables');
})->name('widgets_tables');
Route::get('/widgets_charts', function () {
    return view('admin.widgets.widgets_charts.widgets_charts');
})->name('widgets_charts');
Route::get('/widgets_statistics', function () {
    return view('admin.widgets.widgets_statistics.widgets_statistics');
})->name('widgets_statistics');
Route::get('/widgets_miscellaneous', function () {
    return view('admin.widgets.widgets_miscellaneous.widgets_miscellaneous');
})->name('widgets_miscellaneous');
Route::get('/settings_general', function () {
    return view('admin.settings.settings_general.settings_general');
})->name('settings_general');
Route::get('/settings_seo', function () {
    return view('admin.settings.settings_seo.settings_seo');
})->name('settings_seo');
Route::get('/settings_tags', function () {
    return view('admin.settings.settings_tags.settings_tags');
})->name('settings_tags');
Route::get('/settings_email', function () {
    return view('admin.settings.settings_email.settings_email');
})->name('settings_email');
Route::get('/settings_tasks', function () {
    return view('admin.settings.settings_tasks.settings_tasks');
})->name('settings_tasks');
Route::get('/settings_leads', function () {
    return view('admin.settings.settings_leads.settings_leads');
})->name('settings_leads');
Route::get('/settings_support', function () {
    return view('admin.settings.settings_support.settings_support');
})->name('settings_support');
Route::get('/settings_finance', function () {
    return view('admin.settings.settings_finance.settings_finance');
})->name('settings_finance');
Route::get('/settings_gateways', function () {
    return view('admin.settings.settings_gateways.settings_gateways');
})->name('settings_gateways');
Route::get('/settings_customers', function () {
    return view('admin.settings.settings_customers.settings_customers');
})->name('settings_customers');
Route::get('/settings_localization', function () {
    return view('admin.settings.settings_localization.settings_localization');
})->name('settings_localization');
Route::get('/settings_recaptcha', function () {
    return view('admin.settings.settings_recaptcha.settings_recaptcha');
})->name('settings_recaptcha');
Route::get('/settings_miscellaneous', function () {
    return view('admin.settings.settings_miscellaneous.settings_miscellaneous');
})->name('settings_miscellaneous');
Route::get('/help_knowledgebase', function () {
    return view('admin.help.help_knowledgebase.help_knowledgebase');
})->name('help_knowledgebase');
Route::get('/auth_404_cover', function () {
    return view('admin.authentication.auth_404_cover.auth_404_cover');
})->name('auth_404_cover');
Route::get('/auth_404_minimal', function () {
    return view('admin.authentication.auth_404_minimal.auth_404_minimal');
})->name('auth_404_minimal');
Route::get('/auth_404_creative', function () {
    return view('admin.authentication.auth_404_creative.auth_404_creative');
})->name('auth_404_creative');
Route::get('/auth_login_cover', function () {
    return view('admin.authentication.auth_login_cover.auth_login_cover');
})->name('auth_login_cover');
Route::get('/auth_login_minimal', function () {
    return view('admin.authentication.auth_login_minimal.auth_login_minimal');
})->name('auth_login_minimal');
Route::get('/auth_login_creative', function () {
    return view('admin.authentication.auth_login_creative.auth_login_creative');
})->name('auth_login_creative');
Route::get('/auth_maintenance_cover', function () {
    return view('admin.authentication.auth_maintenance_cover.auth_maintenance_cover');
})->name('auth_maintenance_cover');
Route::get('/auth_maintenance_minimal', function () {
    return view('admin.authentication.auth_maintenance_minimal.auth_maintenance_minimal');
})->name('auth_maintenance_minimal');
Route::get('/auth_maintenance_creative', function () {
    return view('admin.authentication.auth_maintenance_creative.auth_maintenance_creative');
})->name('auth_maintenance_creative');
Route::get('/auth_register_cover', function () {
    return view('admin.authentication.auth_register_cover.auth_register_cover');
})->name('auth_register_cover');
Route::get('/auth_register_minimal', function () {
    return view('admin.authentication.auth_register_minimal.auth_register_minimal');
})->name('auth_register_minimal');
Route::get('/auth_register_creative', function () {
    return view('admin.authentication.auth_register_creative.auth_register_creative');
})->name('auth_register_creative');
Route::get('/auth_reset_cover', function () {
    return view('admin.authentication.auth_reset_cover.auth_reset_cover');
})->name('auth_reset_cover');
Route::get('/auth_reset_minimal', function () {
    return view('admin.authentication.auth_reset_minimal.auth_reset_minimal');
})->name('auth_reset_minimal');
Route::get('/auth_reset_creative', function () {
    return view('admin.authentication.auth_reset_creative.auth_reset_creative');
})->name('auth_reset_creative');
Route::get('/auth_verify_cover', function () {
    return view('admin.authentication.auth_verify_cover.auth_verify_cover');
})->name('auth_verify_cover');
Route::get('/auth_verify_minimal', function () {
    return view('admin.authentication.auth_verify_minimal.auth_verify_minimal');
})->name('auth_verify_minimal');
Route::get('/auth_verify_creative', function () {
    return view('admin.authentication.auth_verify_creative.auth_verify_creative');
})->name('auth_verify_creative');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'admin.dashboards.index.index')->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
    Route::delete('invitations/{invitation}', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
});
