@extends('layouts.admin.includes.main')
@section('title', 'settings_finance')
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
                                <a class="nav-link active" href="settings-finance.html">
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
                                    <h4 class="fw-bold">Finance General</h4>
                                    <div class="fs-12 text-muted">Financial general settings</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Decimal Separator </label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="" selected>. (Dot)</option>
                                        <option value="">, (Clone)</option>
                                    </select>
                                    <small class="form-text text-muted">Decimal Separator [Ex: ./,]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Thousand Separator </label>
                                    <select class="form-select" data-select2-selector="default">
                                        <option value="">. (Dot)</option>
                                        <option value="" selected>, (Clone)</option>
                                        <option value="">' (Apostrophe)</option>
                                        <option value="">None</option>
                                        <option value="">Space</option>
                                    </select>
                                    <small class="form-text text-muted">Thousand Separator [Ex: ./,/'/None/Space]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Default Tax </label>
                                    <select class="form-select" data-select2-selector="priority">
                                        <option value="" data-bg="bg-dark" selected>No Tax</option>
                                        <option value="" data-bg="bg-primary">5% + $2</option>
                                        <option value="" data-bg="bg-success">10% + $2</option>
                                        <option value="" data-bg="bg-indigo">15% + $2</option>
                                        <option value="" data-bg="bg-warning">20% + $2</option>
                                        <option value="" data-bg="bg-danger">25% + $2</option>
                                    </select>
                                    <small class="form-text text-muted">Default Tax [Ex: 5%/10%/15%]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show TAX per item </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Show TAX per item [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Remove the tax name from item table row</label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Remove the tax name from item table row [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Exclude currency symbol from items table Amount </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Exclude currency symbol from items table Amount [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25) </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25) [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Output total amount to words in invoice/estimate/proposal </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Output total amount to words in invoice/estimate/proposal [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Number words into lowercase </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Number words into lowercase [Ex: Yes/No]</small>
                                </div>
                                <hr class="my-5">
                                <div class="mb-5">
                                    <h4 class="fw-bold">Invoice Seetting</h4>
                                    <div class="fs-12 text-muted">Invoicing set correctly.</div>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Invoice Number Prefix</label>
                                    <div class="input-group">
                                        <span class="input-group-text">INV-</span>
                                        <input type="text" class="form-control" placeholder="Invoice Number Prefix">
                                    </div>
                                    <small class="form-text text-muted">Invoice Number Prefix [Ex: INV-/ORD-]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Invoice due after (days)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="feather-calendar"></i>
                                        </span>
                                        <input type="number" class="form-control" placeholder="Invoice due after (days)">
                                    </div>
                                    <small class="form-text text-muted">Invoice due after (days) [Ex: 15/30 days]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Allow staff members to view invoices where they are assigned to </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Allow staff members to view invoices where they are assigned to [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Require client to be logged in to view invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Require client to be logged in to view invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Delete invoice allowed only on last invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Delete invoice allowed only on last invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label"> Decrement invoice number on delete </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted"> Decrement invoice number on delete [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Exclude invoices with draft status from customers area </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Exclude invoices with draft status from customers area [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show Sale Agent On Invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Show Sale Agent On Invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show Project Name On Invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Show Project Name On Invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show Total Paid On Invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Show Total Paid On Invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show Credits Applied On Invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Show Credits Applied On Invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Show Amount Due On Invoice </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success" selected>Yes</option>
                                        <option value="" data-icon="feather-x text-danger">No</option>
                                    </select>
                                    <small class="form-text text-muted">Show Amount Due On Invoice [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Attach invoice PDF when sending payment receipt to email </label>
                                    <select class="form-select" data-select2-selector="icon">
                                        <option value="" data-icon="feather-check text-success">Yes</option>
                                        <option value="" data-icon="feather-x text-danger" selected>No</option>
                                    </select>
                                    <small class="form-text text-muted">Attach invoice PDF when sending payment receipt to email [Ex: Yes/No]</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Predefined Client Note</label>
                                    <textarea cols="30" rows="10" class="form-control" placeholder="Predefined Client Note"></textarea>
                                    <small class="form-text text-muted">Predefined Client Note</small>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Predefined Terms & Conditions</label>
                                    <textarea cols="30" rows="10" class="form-control" placeholder="Predefined Terms & Conditions"></textarea>
                                    <small class="form-text text-muted">Predefined Terms & Conditions</small>
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Proposal Info Format (PDF and HTML)</label>
                                    <textarea class="form-control" cols="30" rows="10" placeholder="{proposal_to}
{address}
{city} {state}
{country_code} {zip_code}
{phone}
{email}"></textarea>
                                    <small class="form-text text-muted">Proposal Info Format (PDF and HTML) [Ex: {proposal_to} {address} {city} {state} {country_code} {zip_code} {phone} {email}]</small>
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
