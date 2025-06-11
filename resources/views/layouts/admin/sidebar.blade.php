<aside>
    <nav>
        <div class="nav-wrapper">
            <span class="nav__close">
                <i class="fas fa-window-close"></i>
            </span>
            <div class="nav-list">
                <ul>
                    <li>
                        <a class="{{ (request()->is('admin/dashboard') ? 'nav-active':'') }}" href="{{url('admin/dashboard')}}">
                            <span><i class="fas fa-home"></i></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ (request()->is('admin/abouts') ? 'nav-active' : '') }}" href="{{url('admin/abouts')}}">
                            <span><i class="fas fa-user"></i></span>
                            <span>About Me</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/services')}}">
                            <span><i class="fas fa-concierge-bell"></i></span>
                            <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/skills')}}">
                            <span><i class="fas fa-cogs"></i></span>
                            <span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/educations')}}">
                            <span><i class="fas fa-graduation-cap"></i></span>
                            <span>Educations</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/experiences')}}">
                            <span><i class="fas fa-briefcase"></i></span>
                            <span>Experiences</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/projects')}}">
                            <span><i class="fas fa-project-diagram"></i></span>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/testimonials')}}">
                            <span><i class="fas fa-quote-left"></i></span>
                            <span>Testimonials</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/messages')}}">
                            <span><i class="fas fa-envelope"></i></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/users')}}">
                            <span><i class="fas fa-users"></i></span>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-list">
                <ul>
                    <li>
                        <a href="{{url('admin/settings')}}">
                            <span><i class="fas fa-cog"></i></span>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</aside>