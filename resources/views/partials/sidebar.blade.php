@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

          <!--
              <li>
                  <select class="searchable-field form-control"></select>
              </li>
          -->

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/calendar')}}">
                  <i class="fa fa-calendar"></i>
                  <span class="title">
                    Calendar
                  </span>
                </a>
            </li>

            @can('decision_tool_access')
                <li>
                    <a href="{{ route('admin.decision_tools.diagram') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('global.decision-tool.title')</span>
                    </a>
                </li>@endcan

            @can('asset_map_access')
            <li>
                <a href="{{ route('admin.asset_maps.diagram') }}">
                    <i class="fa fa-gears"></i>
                    <span>Asset Map</span>
                </a>
            </li>@endcan

            @can('activity_access')
            <li>
                <a href="{{ route('admin.activities.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.activity.title')</span>
                </a>
            </li>@endcan

            @can('contact_access')
            <li>
                <a href="{{ route('admin.contacts.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.contacts.title')</span>
                </a>
            </li>@endcan

            @can('contact_category_access')
            <li>
                <a href="{{ route('admin.contact_categories.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.contact-categories.title')</span>
                </a>
            </li>@endcan

            @can('document_access')
            <li>
                <a href="{{ route('admin.documents.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.documents.title')</span>
                </a>
            </li>@endcan

            @can('publication_access')
            <li>
                <a href="{{ route('admin.publications.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.publications.title')</span>
                </a>
            </li>@endcan

            @can('project_access')
            <li>
                <a href="{{ route('admin.projects.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.projects.title')</span>
                </a>
            </li>@endcan

            @can('deliverable_access')
            <li>
                <a href="{{ route('admin.deliverables.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.deliverables.title')</span>
                </a>
            </li>@endcan

            @can('calendar_access')
            <li>
                <a href="{{ route('admin.calendars.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.calendar.title')</span>
                </a>
            </li>@endcan

            @can('partner_access')
            <li>
                <a href="{{ route('admin.partners.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.partners.title')</span>
                </a>
            </li>@endcan

            @can('work_package_access')
            <li>
                <a href="{{ route('admin.work_packages.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.work-packages.title')</span>
                </a>
            </li>@endcan

            @can('tool_access')
            <li>
                <a href="{{ route('admin.tools.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.tools.title')</span>
                </a>
            </li>@endcan

            @can('decision_tool_access')
                <li>
                    <a href="{{ route('admin.decision_tools.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('global.decision-tool.title2')</span>
                    </a>
                </li>@endcan

            @can('asset_map_access')
                <li>
                    <a href="{{ route('admin.asset_maps.index') }}">
                        <i class="fa fa-gears"></i>
                        <span>@lang('global.asset-map.title2')</span>
                    </a>
                </li>@endcan

            @can('metric_access')<li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.metrics.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('highlights_metric_access')
                        <li>
                            <a href="{{ route('admin.highlights_metrics.index') }}">
                                <i class="fa fa-gears"></i>
                                <span>@lang('global.highlights-metrics.title')</span>
                            </a>
                        </li>@endcan
                    @can('partners_metric_access')
                    <li>
                        <a href="{{ route('admin.partners_metrics.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.partners-metrics.title')</span>
                        </a>
                    </li>@endcan

                    @can('projects_metric_access')
                    <li>
                        <a href="{{ route('admin.projects_metrics.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.projects-metrics.title')</span>
                        </a>
                    </li>@endcan

                    @can('countries_metric_access')
                        <li>
                            <a href="{{ route('admin.countries_metrics.index') }}">
                                <i class="fa fa-gears"></i>
                                <span>@lang('global.countries-metrics.title')</span>
                            </a>
                        </li>@endcan

                </ul>
            </li>@endcan

            @can('faq_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-question"></i>
                    <span>@lang('global.faq-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('faq_category_access')
                    <li>
                        <a href="{{ route('admin.faq_categories.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.faq-categories.title')</span>
                        </a>
                    </li>@endcan

                    @can('faq_question_access')
                    <li>
                        <a href="{{ route('admin.faq_questions.index') }}">
                            <i class="fa fa-question"></i>
                            <span>@lang('global.faq-questions.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan

            @can('content_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('global.content-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('content_category_access')
                    <li>
                        <a href="{{ route('admin.content_categories.index') }}">
                            <i class="fa fa-folder"></i>
                            <span>@lang('global.content-categories.title')</span>
                        </a>
                    </li>@endcan

                    @can('content_tag_access')
                    <li>
                        <a href="{{ route('admin.content_tags.index') }}">
                            <i class="fa fa-tags"></i>
                            <span>@lang('global.content-tags.title')</span>
                        </a>
                    </li>@endcan

                    @can('content_page_access')
                    <li>
                        <a href="{{ route('admin.content_pages.index') }}">
                            <i class="fa fa-file-o"></i>
                            <span>@lang('global.content-pages.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('global.users.title')</span>
                        </a>
                    </li>@endcan

                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.roles.title')</span>
                        </a>
                    </li>@endcan

                    @can('permission_access')
                    <li>
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('global.permissions.title')</span>
                        </a>
                    </li>@endcan

                    @can('professional_category_access')
                    <li>
                        <a href="{{ route('admin.professional_categories.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.professional-category.title')</span>
                        </a>
                    </li>@endcan

                    @can('education_access')
                    <li>
                        <a href="{{ route('admin.education.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.education.title')</span>
                        </a>
                    </li>@endcan

                    @can('country_access')
                    <li>
                        <a href="{{ route('admin.countries.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.country.title')</span>
                        </a>
                    </li>@endcan

                    @can('user_action_access')
                    <li>
                        <a href="{{ route('admin.user_actions.index') }}">
                            <i class="fa fa-th-list"></i>
                            <span>@lang('global.user-actions.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan

            @can('system_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('global.system-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    @can('type_of_institution_access')
                    <li>
                        <a href="{{ route('admin.type_of_institutions.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.type-of-institution.title')</span>
                        </a>
                    </li>@endcan

                    @can('wp_access')
                    <li>
                        <a href="{{ route('admin.wps.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.wp.title')</span>
                        </a>
                    </li>@endcan

                    @can('color_access')
                    <li>
                        <a href="{{ route('admin.colors.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('global.color.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan








            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('global.app_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
