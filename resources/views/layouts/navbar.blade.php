<nav class="navbar">
    <div class="nav-wrapper d-flex justify-content-between">
        <a href="/feed" class="text-decoration-none text-dark">InstaApp</a>
        <div class="nav-items">
            <a class="nav-icon" href="/"><i class="fa-solid fa-house"></i></a>
            <a class="nav-icon" href="notifications"><i class="fa-solid fa-heart"></i></a>
            <a class="nav-icon" href="feed/create"><i class="fa-regular fa-square-plus"></i></a>
            <div class="nav-icon dropdown rounded-circle">
                <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="user-profile" src="{{ asset('storage/'.auth()->user()->profile_photo_path)}}" alt="">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/my_profile">My Profile</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            Logout</a>
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>