<header class="p-3 mb-3 border-bottom sticky-top bg-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="navbar-brand" href="...">...</a>

            <ul class="nav col-12 col-lg-auto mx-3 me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a class="nav-link ... px-2"
                        href="...">Home</a>
                </li>
                <li>
                    <a class="nav-link ... px-2"
                        href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ..."
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item {{ 1 == 1 ? 'link-primary' : 'link-secondary' }}"
                                    href="#">
                                   categorie
                                </a>
                            </li>

                    </ul>
                </li>

            </ul>

            <form action="#" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                @csrf
                <div class="input-group">
                    <input type="text" name="keywords" id="keywords" class="form-control"
                        placeholder="Search post by keywords or description" size="35">
                    <button type="submit" class="btn btn-success btn-md"><i class="fa fa-search"></i> Search</button>
                </div>
            </form>

                <div class="text-end">
                    <a href="#" class="btn btn-primary me-2"><i class="fa fa-sign-in"></i> Login</a>
                </div>

        </div>
    </div>
</header>
