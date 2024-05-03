@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark" style="background: linear-gradient(to right, #6fcaff, #003b72);">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="fas fa-dumbbell me-2"></i>SportyShop</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if ($currentRouteName == 'home') active @endif"><i class="fas fa-home me-1"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link @if ($currentRouteName == 'products.index') active @endif"><i class="fas fa-shopping-basket me-1"></i>Products</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link @if ($currentRouteName == 'reviews') active @endif"><i class="fas fa-star me-1"></i>Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link @if ($currentRouteName == 'profile') active @endif"><i class="fas fa-user me-1"></i>My Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
