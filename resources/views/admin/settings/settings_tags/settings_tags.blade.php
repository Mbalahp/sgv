@extends('layouts.admin.includes.main')
@section('title', 'settings_tags')
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
                                <a class="nav-link active" href="settings-tags.html">
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
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-success">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="VIP">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-danger">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Bugs">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-primary">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Team">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-primary">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Primary">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-success">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Updates">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-warning">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Personal">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-danger">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Promotion">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-teal">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Custom">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-indigo">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Wholesale">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-danger">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Low Budgets">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-success">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="High Budgets">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-4">
                                    <span class="input-group-text text-dark">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Important">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="input-group dropdown mb-0">
                                    <span class="input-group-text text-warning">
                                        <i class="feather-tag"></i>
                                    </span>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" value="Review">
                                    <button type="button" class="btn btn-light-brand dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Color</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Priority</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-light-brand">
                                        <i class="feather-x"></i>
                                    </button>
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
