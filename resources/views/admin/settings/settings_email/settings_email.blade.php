@extends('layouts.admin.includes.main')
@section('title', 'settings_email')
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
                                <a class="nav-link active" href="settings-email.html">
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
                                <a class="nav-link" href="settings-support.html">
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
                                    <h4 class="fw-bold">SMTP Settings</h4>
                                    <div class="fs-12 text-muted">SMTP setup main email</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Mail Engine <span class="text-danger">*</span></label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option selected>HPMailer</option>
                                        <option value="">CodeIgniter</option>
                                    </select>
                                    <small class="form-text text-muted">Mail Engine [Ex: HPMailer/CodeIgniter]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Email Protocol</label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">Mail</option>
                                        <option selected>SMTP</option>
                                        <option value="">Sendmail</option>
                                    </select>
                                    <small class="form-text text-muted">Email Protocol [Ex: Mail/SMTP/Sendmail]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                    <small class="form-text text-muted">Email [Ex: support@wrapcoders.com]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Email Charset</label>
                                    <input type="text" class="form-control" placeholder="Email Charset">
                                    <small class="form-text text-muted">Email [Ex: utf-8]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Email Signature</label>
                                    <textarea class="form-control" rows="10" placeholder="Email Signature"></textarea>
                                    <small class="form-text text-muted">Email Signature [Ex: WRAPCODERS]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Predefined Header</label>
                                    <textarea class="form-control" rows="10" placeholder="Predefined Header"></textarea>
                                    <small class="form-text text-muted">Predefined Header [Ex: Email template header code]</small>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Predefined Footer</label>
                                    <textarea class="form-control" rows="10" placeholder="Predefined Footer"></textarea>
                                    <small class="form-text text-muted">Predefined Footer [Ex: Email template footer code]</small>
                                </div>
                                <hr class="my-5">
                                <div class="mb-4">
                                    <h4 class="fw-bold">Email Queue</h4>
                                    <div class="fs-12 text-muted">Email queue setup</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">
                                        <span class="me-2">Enable Email Queue</span>
                                        <span data-bs-toggle="tooltip" title="To speed up the emailing process, the system will add the emails in queue and will send them via cron job, make sure that the cron job is properly configured in order to use this feature."><i class="feather-info fs-13 text-muted"></i></span>
                                    </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Enable Email Queue [Ex: YES/NO]</small>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">
                                        <span class="me-2">Do not add emails with attachments in the queue?</span>
                                        <span data-bs-toggle="tooltip" title="Most likely you will encounter problems with the email queue if the system needs to add big files to the queue."><i class="feather-info fs-13 text-muted"></i></span>
                                    </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Do not add emails with attachments in the queue? [Ex: YES/NO]</small>
                                </div>
                                <hr class="my-5">
                                <div class="mb-5">
                                    <h4 class="fw-bold">Send Test Email</h4>
                                    <div class="fs-12 text-muted">Send test email to make sure that your SMTP settings is set correctly.</div>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Test Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Send Test Email">
                                        <a href="javascript:void(0);" class="input-group-text">Send Test</a>
                                    </div>
                                    <small class="form-text text-muted">Send Test Email [Ex: test_1@email.com, test_2@email.com, test_3@email.com]</small>
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
