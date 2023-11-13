@extends('auth.layout')
<section class="sidebar">
    <a href="#" class="logo">
        <img src="{{ asset('assets/images/cmv_logo.png') }}" alt="IMG">
        <!-- <i class='bx bxs-wink-smile'></i> -->
        <span class="text">CMV</span>
    </a>

    <ul class="side-menu top">
        <li class="active">
            <a href="#" class="nav-link">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bxs-bar-chart-alt-2'></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bxs-store'></i>
                <span class="text">Billing</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bxs-store'></i>
                <span class="text">Income</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bx-webcam'></i>
                <span class="text">Website</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class='bx bxs-user'></i>
                <span class="text">User</span>
            </a>
        </li>
    </ul>

    <ul class="side-menu">
        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class="fas fa-right-from-bracket"></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>