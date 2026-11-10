@extends('layouts.admin.includes.main')
@section('title', 'settings_support')
@section('content')
<div class="nxl-content without-header nxl-full-content">
            
            <div class="main-content d-flex">
                
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Settings</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a class="nav-link" href="settings-general.html">
                                    <i class="feather-airplay"></i>
                                    <span>General</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-seo.html">
                                    <i class="feather-search"></i>
                                    <span>SEO</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-tags.html">
                                    <i class="feather-tag"></i>
                                    <span>Tags</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-email.html">
                                    <i class="feather-mail"></i>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-tasks.html">
                                    <i class="feather-check-circle"></i>
                                    <span>Tasks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-leads.html">
                                    <i class="feather-crosshair"></i>
                                    <span>Leads</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="settings-support.html">
                                    <i class="feather-life-buoy"></i>
                                    <span>Support</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-finance.html">
                                    <i class="feather-dollar-sign"></i>
                                    <span>Finance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-gateways.html">
                                    <i class="feather-git-branch"></i>
                                    <span>Gateways</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-customers.html">
                                    <i class="feather-users"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-localization.html">
                                    <i class="feather-globe"></i>
                                    <span>Localization</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-recaptcha.html">
                                    <i class="feather-shield"></i>
                                    <span>reCaptcha</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="settings-miscellaneous.html">
                                    <i class="feather-cast"></i>
                                    <span>Miscellaneous</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header bg-white sticky-top">
                        <div class="page-header-left">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-24"></i>
                            </a>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                                <a href="javascript:void(0);" class="text-danger">Cancel</a>
                                <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                    <i class="feather-save me-2"></i>
                                    <span>Save Changes</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="mb-5">
                                    <label class="form-label">Default status selected when replying to ticket</label>
                                    <select class="form-select" data-select2-selector="status">
                                        <option value="" data-bg="bg-dark">Open</option>
                                        <option value="" data-bg="bg-primary">In Progress</option>
                                        <option value="" data-bg="bg-danger" selected>Answered</option>
                                        <option value="" data-bg="bg-success">On Hold</option>
                                        <option value="" data-bg="bg-warning">Closed</option>
                                    </select>
                                    <small class="form-text text-muted">Default status selected when replying to ticket [Ex: Open/Closed/Answered]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Default priority on piped ticket</label>
                                    <select class="form-select" data-select2-selector="priority">
                                        <option value="" data-bg="bg-dark">Low</option>
                                        <option value="" data-bg="bg-primary" selected>Medium</option>
                                        <option value="" data-bg="bg-danger">High</option>
                                        <option value="" data-bg="bg-success">Urgent</option>
                                        <option value="" data-bg="bg-warning">Closed</option>
                                    </select>
                                    <small class="form-text text-muted">Default priority on piped ticket [Ex: Low/Medium/High/Urgent/Closed]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allowed attachments file extensions</label>
                                    <select class="form-select" data-select2-selector="label" multiple>
                                        <option value=".jpg" data-bg="bg-primary" selected>.jpg</option>
                                        <option value=".png" data-bg="bg-success" selected>.png</option>
                                        <option value=".pdf" data-bg="bg-danger" selected>.pdf</option>
                                        <option value=".doc" data-bg="bg-secondary" selected>.doc</option>
                                        <option value=".zip" data-bg="bg-dark" selected>.zip</option>
                                        <option value=".rar" data-bg="bg-warning" selected>.rar</option>
                                    </select>
                                    <small class="form-text text-muted">Allowed attachments file extensions [Ex: Facebook/Google/Others]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Ticket Replies Order</label>
                                    <select class="form-select" data-select2-selector="label">
                                        <option value=".jpg" data-bg="bg-primary" selected>Ascending</option>
                                        <option value=".png" data-bg="bg-success">Descending</option>
                                    </select>
                                    <small class="form-text text-muted">Ticket Replies Order [Ex: Ascending/Descending]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow staff to access only ticket that belongs to staff departments </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow staff to access only ticket that belongs to staff departments [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Send staff-related ticket notifications to the ticket assignee only </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Send staff-related ticket notifications to the ticket assignee only [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label"> Receive notification on new ticket opened </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted"> Receive notification on new ticket opened [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label"> Receive notification when customer reply to a ticket </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted"> Receive notification when customer reply to a ticket [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label"> Allow staff members to open tickets to all contacts? </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted"> Allow staff members to open tickets to all contacts? [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Automatically assign the ticket to the first staff that post a reply? </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Automatically assign the ticket to the first staff that post a reply? [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow access to tickets for non staff members </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow access to tickets for non staff members [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow non-admin staff members to delete ticket attachments </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow non-admin staff members to delete ticket attachments [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow customer to change ticket status from customers area </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow customer to change ticket status from customers area [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">In customers area only show tickets related to the logged in contact (Primary contact not applied) </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">In customers area only show tickets related to the logged in contact (Primary contact not applied) [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Enable support menu item badge </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Enable support menu item badge [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Pipe Only on Registered Users </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Pipe Only on Registered Users [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Only Replies Allowed by Email </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Only Replies Allowed by Email [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Try to import only the actual ticket reply (without quoted/forwarded message) </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Try to import only the actual ticket reply (without quoted/forwarded message) [Ex: Yes/No]</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <footer class="footer">
                        <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                            <span>Copyright ©</span>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                        <div class="d-flex align-items-center gap-4">
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
                        </div>
                    </footer>
                    
                </div>
                
            </div>
            
        </div>
@endsection
