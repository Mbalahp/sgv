   <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{ route('index') }}" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="/build/assets/images/logo-full.png" alt="" class="logo logo-lg" />
                    <img src="/build/assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('index') }}">CRM</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('Analytics') }}">Analytics</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('report_sales') }}">Sales Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('report_leads') }}">Leads Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('report_project') }}">Project Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('report_timesheets') }}">Timesheets Report</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-send"></i></span>
                            <span class="nxl-mtext">Applications</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('chat') }}">Chat</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('email') }}">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('tasks') }}">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('notes') }}">Notes</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('storage') }}">Storage</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('calendar') }}">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Proposal</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('proposal') }}">Proposal</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('proposal_view') }}">Proposal View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('proposal_edit') }}">Proposal Edit</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('proposal_create') }}">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('payments') }}">Payment</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('invoice_view') }}">Invoice View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('invoice_create') }}">Invoice Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('customers') }}">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('customers_view') }}">Customers View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('customers_create') }}">Customers Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('leads') }}">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('leads_view') }}">Leads View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('leads_create') }}">Leads Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('projects') }}">Projects</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('projects_view') }}">Projects View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('projects_create') }}">Projects Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('widgets_lists') }}">Lists</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('widgets_tables') }}">Tables</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('widgets_charts') }}">Charts</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('widgets_statistics') }}">Statistics</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('widgets_miscellaneous') }}">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_general') }}">General</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_seo') }}">SEO</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_tags') }}">Tags</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_email') }}">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_tasks') }}">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_leads') }}">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_support') }}">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_finance') }}">Finance</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_gateways') }}">Gateways</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_customers') }}">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_localization') }}">Localization</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_recaptcha') }}">reCAPTCHA</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('settings_miscellaneous') }}">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-power"></i></span>
                            <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_login_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_login_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_login_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Register</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_register_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_register_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_register_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Error-404</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_404_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_404_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_404_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Reset Pass</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_reset_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_reset_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_reset_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Verify OTP</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_verify_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_verify_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_verify_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Maintenance</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_maintenance_cover') }}">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_maintenance_minimal') }}">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="{{ route('auth_maintenance_creative') }}">Creative</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-life-buoy"></i></span>
                            <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="#/">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('help_knowledgebase') }}">KnowledgeBase</a></li>
                            <li class="nxl-item"><a class="nxl-link" href=".docs/documentations.html">Documentations</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="feather-sunrise fs-4 text-dark"></i>
                        <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                        <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running easily.</p>
                        <a href="javascript:void(0);" class="btn btn-primary text-dark w-100">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
