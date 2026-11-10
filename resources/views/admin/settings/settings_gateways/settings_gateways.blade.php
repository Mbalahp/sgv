@extends('layouts.admin.includes.main')
@section('title', 'settings_gateways')
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
                                <a class="nav-link active" href="settings-gateways.html">
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
                                    <h4 class="fw-bold">Paypal</h4>
                                    <div class="fs-12 text-muted">Paypal payment gateways</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">PayPal API Username</label>
                                    <input type="text" class="form-control" placeholder="PayPal API Username">
                                    <small class="form-text text-muted">PayPal API Username</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">PayPal API Password</label>
                                    <input type="password" class="form-control" placeholder="PayPal API Password">
                                    <small class="form-text text-muted">PayPal API Password</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">PayPal API Signature</label>
                                    <input type="text" class="form-control" placeholder="PayPal API Signature">
                                    <small class="form-text text-muted">PayPal API Signature</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">Live</option>
                                        <option value="" selected>Sandbox</option>
                                    </select>
                                    <small class="form-text text-muted">Decimal Separator [Ex: Sandbox/Live]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Selected by default on invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Selected by default on invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Currencies</label>
                                    <select class="form-select" data-select2-selector="currency" multiple>
                                        <option value="" data-currency="us" selected>USD</option>
                                        <option value="" data-currency="eu" selected>EUR</option>
                                        <option value="" data-currency="au" selected>AUD</option>
                                        <option value="" data-currency="bd" selected>BDT</option>
                                        <option value="" data-currency="gb" selected>GBP</option>
                                        <option value="" data-currency="ca" selected>CAD</option>
                                        <option value="" data-currency="ru" selected>RUB</option>
                                    </select>
                                    <small class="form-text text-muted">Currencies [Ex: USD/EUR/RUB]</small>
                                </div>
                                <hr class="my-5">
                                <div class="mb-5">
                                    <h4 class="fw-bold">Stripe Checkout</h4>
                                    <div class="fs-12 text-muted">Stripe Checkout gateways</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Stripe Publishable Key</label>
                                    <input type="text" class="form-control" placeholder="Stripe Publishable Key">
                                    <small class="form-text text-muted">Stripe Publishable Key</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Stripe API Secret Key</label>
                                    <input type="password" class="form-control" placeholder="Stripe API Secret Key">
                                    <small class="form-text text-muted">Stripe API Secret Key</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">Live</option>
                                        <option value="" selected>Sandbox</option>
                                    </select>
                                    <small class="form-text text-muted">Decimal Separator [Ex: Sandbox/Live]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Selected by default on invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Selected by default on invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow primary contact to update stored credit card token? </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow primary contact to update stored credit card token? [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Currencies</label>
                                    <select class="form-select" data-select2-selector="currency" multiple>
                                        <option value="" data-currency="us" selected>USD</option>
                                        <option value="" data-currency="eu" selected>EUR</option>
                                        <option value="" data-currency="au" selected>AUD</option>
                                        <option value="" data-currency="bd" selected>BDT</option>
                                        <option value="" data-currency="gb" selected>GBP</option>
                                        <option value="" data-currency="ca" selected>CAD</option>
                                        <option value="" data-currency="ru" selected>RUB</option>
                                    </select>
                                    <small class="form-text text-muted">Currencies [Ex: USD/EUR/RUB]</small>
                                </div>
                                <hr class="my-5">
                                <div class="mb-5">
                                    <h4 class="fw-bold">2Checkout</h4>
                                    <div class="fs-12 text-muted">2Checkout payment gateways</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Merchant Code</label>
                                    <input type="text" class="form-control" placeholder="Merchant Code">
                                    <small class="form-text text-muted">Merchant Code</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Secret Code</label>
                                    <input type="password" class="form-control" placeholder="Secret Code">
                                    <small class="form-text text-muted">Secret Code</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">Live</option>
                                        <option value="" selected>Sandbox</option>
                                    </select>
                                    <small class="form-text text-muted">Decimal Separator [Ex: Sandbox/Live]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Selected by default on invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Selected by default on invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Currencies</label>
                                    <select class="form-select" data-select2-selector="currency" multiple>
                                        <option value="" data-currency="us" selected>USD</option>
                                        <option value="" data-currency="eu" selected>EUR</option>
                                        <option value="" data-currency="au" selected>AUD</option>
                                        <option value="" data-currency="bd" selected>BDT</option>
                                        <option value="" data-currency="gb" selected>GBP</option>
                                        <option value="" data-currency="ca" selected>CAD</option>
                                        <option value="" data-currency="ru" selected>RUB</option>
                                    </select>
                                    <small class="form-text text-muted">Currencies [Ex: USD/EUR/RUB]</small>
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
