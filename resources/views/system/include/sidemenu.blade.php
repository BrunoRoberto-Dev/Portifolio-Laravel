<div class="d-flex flex-column align-items-center h-100">
    <img src="/assets/images/general/logo.png" alt="Logo" width="150" class="mb-5 mt-2">

    <nav class="w-100">
        <ul class="list-unstyled d-flex flex-column align-items-center gap-4">

            {{-- TURN FOREACH IN THE FUTURE --}}
            <li>
                <a href="/system/home" class="{{ Request::is('system/home') ? 'active' : '' }} btn btn-sidemenu d-flex flex-column align-items-center text-white fs-5">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>
            </li>

            <li>
                <a href="/system/profile" class="{{ Request::is('system/profile') ? 'active' : '' }} btn btn-sidemenu d-flex flex-column align-items-center text-white fs-5">
                    <i class="bi bi-person-fill"></i>
                    Profile
                </a>
            </li>

            <li>
                <a href="/system/projects" class="{{ Request::is('system/projects') ? 'active' : '' }} btn btn-sidemenu d-flex flex-column align-items-center text-white fs-5">
                    <i class="bi bi-code-slash"></i>
                    Projects
                </a>
            </li>

            <li>
                <a href="/system/skills" class="{{ Request::is('system/skills') ? 'active' : '' }} btn btn-sidemenu d-flex flex-column align-items-center text-white fs-5">
                    <i class="bi bi-perplexity"></i>
                    Skills
                </a>
            </li>




            <li>
                <a href="/logout" class="btn btn-sidemenu d-flex flex-column align-items-center text-white fs-5">
                    <i class="bi bi-box-arrow-in-left"></i>
                    Log Out
                </a>
            </li>

        </ul>
    </nav>
</div>
