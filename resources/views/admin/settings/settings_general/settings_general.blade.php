@extends('layouts.admin.includes.main')
@section('title', 'settings_general')
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
                                <a class="nav-link active" href="settings-general.html">
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
                                    <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                        <img src="/build/assets/images/logo-abbr.png" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                        <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                            <i class="feather feather-camera" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Company Name">
                                    <small class="form-text text-muted">Your company name [Ex: WRAPCODERS]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Company Address">
                                    <small class="form-text text-muted">Your company address [Ex: 708 Heavner Court]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="Company City">
                                    <small class="form-text text-muted">Your company city [Ex: Levittown]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" placeholder="Company State">
                                    <small class="form-text text-muted">Your company state [Ex: NY 11756]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Zip</label>
                                    <input type="number" class="form-control" placeholder="Zip Code">
                                    <small class="form-text text-muted">Zip Code [Ex: 11756]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control" placeholder="Phone">
                                    <small class="form-text text-muted">Phone [Ex: +1 (375) 2589 654]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">TIN Number</label>
                                    <input type="number" class="form-control" placeholder="TIN Number">
                                    <small class="form-text text-muted">TIN Number [Ex: 987-6985-9658-654]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Domain</label>
                                    <input type="url" class="form-control" placeholder="Company Main Domain">
                                    <small class="form-text text-muted"> Company main domain [Ex: https://wrapcoders.com]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allowed</label>
                                    <input class="form-control" placeholder="Allowed file types">
                                    <small class="form-text text-muted">Allowed file types [Ex: .png,.jpg,.pdf,.doc,.docx,.xls,.xlsx,.zip,.rar,.txt]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Direction</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="LRTdirection">LRT Direction (Left to Right)</label>
                                        <input class="form-check-input" type="radio" name="site-direction" id="LRTdirection" checked>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="RTLdirection">RTL Direction (Right to Left)</label>
                                        <input class="form-check-input" type="radio" name="site-direction" id="RTLdirection">
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Information (PDF and HTML)</label>
                                    <textarea class="form-control" cols="30" rows="10" placeholder="{company_name}
{address}
{city} {state}
{country_code} {zip_code}
{vat_number_with_label}"></textarea>
                                    <small class="form-text text-muted">Company Information Format [Ex: {company_name} {address}, {city}, {state}, {zip_code}, {country_code}, {phone}, {vat_number}, {vat_number_with_label}]</small>
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
