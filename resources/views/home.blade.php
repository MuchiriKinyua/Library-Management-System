@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Date & Clock Section -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h4 id="current-date" class="fw-bold d-inline display-5 text-primary"></h4>
                <span class="fw-bold mx-2"> </span>
                <h4 id="current-time" class="fw-bold d-inline display-5 text-primary"></h4>
            </div>
        </div>

        <div class="row d-flex justify-content-start">
            @php
                $cards = [
                    ['count' => $totalUsers, 'title' => 'Users', 'route' => 'users.index', 'icon' => 'fas fa-users', 'color' => 'bg-primary'],
                    ['count' => $totalBooks, 'title' => 'Books', 'route' => 'books.index', 'icon' => 'fas fa-book', 'color' => 'bg-success'],
                    ['count' => $totalMembers, 'title' => 'Members', 'route' => 'members.index', 'icon' => 'fas fa-id-card', 'color' => 'bg-danger'],
                    ['count' => $totalWaiting, 'title' => 'Waiting Users', 'route' => 'waitings.index', 'icon' => 'fas fa-user-clock', 'color' => 'bg-warning text-dark'],
                    ['count' => $totalBorrowings, 'title' => 'Borrowings', 'route' => 'borrowings.index', 'icon' => 'fas fa-book-reader', 'color' => 'bg-info text-dark'],
                    ['count' => $totalReservations, 'title' => 'Reservations', 'route' => 'reservations.index', 'icon' => 'fas fa-calendar-check', 'color' => 'bg-dark'],
                    ['count' => $totalNotifications, 'title' => 'Notifications', 'route' => 'notifications.index', 'icon' => 'fas fa-bell', 'color' => 'bg-secondary'],
                    ['count' => $totalRecords, 'title' => 'Records', 'route' => 'records.index', 'icon' => 'fas fa-folder-open', 'color' => 'bg-purple'],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-lg text-white hover-card {{ $card['color'] }}">
                        <div class="icon-container text-center mt-3">
                            <i class="{{ $card['icon'] }} fa-2x"></i>
                        </div>
                        <div class="card-body text-center">
                            <h2 class="display-4">{{ $card['count'] }}</h2>
                            <h4 class="lead">{{ $card['title'] }}</h4>
                        </div>
                        <div class="border-top">
                            <a href="{{ route($card['route']) }}" class="text-decoration-none text-white p-3 d-block text-center bg-dark-hover">
                                Manage {{ $card['title'] }} <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Real-Time Date & Time Script -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const optionsDate = { day: '2-digit', month: '2-digit', year: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };

            document.getElementById('current-date').innerText = now.toLocaleDateString('en-GB', optionsDate);
            document.getElementById('current-time').innerText = now.toLocaleTimeString('en-GB', optionsTime);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>

    <style>
        .hover-card:hover {
            transform: scale(1.05);
            transition: 0.3s;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.3);
        }
        .bg-dark-hover:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .bg-purple {
            background: #6f42c1 !important;
        }
    </style>
@endsection
