@extends('home.test')
@section()

    @stop
<div class="stack-container">

    <div class="panel left-panel cf ">
        <header style="
    height: 500pc;
">
            <div class="exception">
                <div class="exc-title">
                    Illuminate \                        Contracts \                        Container \                        <span class="exc-title-primary">BindingResolutionException</span>
                </div>

                <div class="exc-message">
                    <span>Target class [App\Http\Controllers\CkeditorController] does not exist.</span>


                    <div class="exc-title prev-exc-title">
                        <span class="exc-title-secondary">Previous exceptions</span>
                    </div>

                    <ul>
                        <li>
                            Class App\Http\Controllers\CkeditorController does not exist              <span class="prev-exc-code">(-1)</span>
                        </li>
                    </ul>




                    <ul class="search-for-help">
                        <li>
                            <a rel="noopener noreferrer" target="_blank" href="https://google.com/search?q=Illuminate%5CContracts%5CContainer%5CBindingResolutionException+Target+class+%5BApp%5CHttp%5CControllers%5CCkeditorController%5D+does+not+exist." title="Search for help on Google.">
                                <!-- Google icon by Alfredo H, from https://www.iconfinder.com/alfredoh -->
                                <!-- Creative Commons (Attribution 3.0 Unported) -->
                                <!-- http://creativecommons.org/licenses/by/3.0/ -->
                                <svg class="google" height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M457.732 216.625c2.628 14.04 4.063 28.743 4.063 44.098C461.795 380.688 381.48 466 260.205 466c-116.024 0-210-93.977-210-210s93.976-210 210-210c56.703 0 104.076 20.867 140.44 54.73l-59.205 59.197v-.135c-22.046-21.002-50-31.762-81.236-31.762-69.297 0-125.604 58.537-125.604 127.84 0 69.29 56.306 127.97 125.604 127.97 62.87 0 105.653-35.966 114.46-85.313h-114.46v-81.902h197.528z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" target="_blank" href="https://duckduckgo.com/?q=Illuminate%5CContracts%5CContainer%5CBindingResolutionException+Target+class+%5BApp%5CHttp%5CControllers%5CCkeditorController%5D+does+not+exist." title="Search for help on DuckDuckGo.">
                                <!-- DuckDuckGo icon by IconBaandar Team, from https://www.iconfinder.com/iconbaandar -->
                                <!-- Creative Commons (Attribution 3.0 Unported) -->
                                <!-- http://creativecommons.org/licenses/by/3.0/ -->
                                <svg class="duckduckgo" height="16" viewBox="150 150 1675 1675" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1792 1024c0 204.364-80.472 398.56-224.955 543.04-144.483 144.48-338.68 224.95-543.044 224.95-204.36 0-398.56-80.47-543.04-224.95-144.48-144.482-224.95-338.676-224.95-543.04 0-204.365 80.47-398.562 224.96-543.045C625.44 336.47 819.64 256 1024 256c204.367 0 398.565 80.47 543.05 224.954C1711.532 625.437 1792 819.634 1792 1024zm-270.206 497.787C1654.256 1389.327 1728 1211.36 1728 1024c0-187.363-73.74-365.332-206.203-497.796C1389.332 393.74 1211.363 320 1024 320s-365.33 73.742-497.795 206.205C393.742 658.67 320 836.637 320 1024c0 187.36 73.744 365.326 206.206 497.787C658.67 1654.25 836.638 1727.99 1024 1727.99c187.362 0 365.33-73.74 497.794-206.203z"></path>
                                    <path d="M1438.64 1177.41c0-.03-.005-.017-.01.004l.01-.004z"></path>
                                    <path d="M1499.8 976.878c.03-.156-.024-.048-.11.107l.11-.107z"></path>
                                    <path d="M1105.19 991.642zm-68.013-376.128c-8.087-10.14-18.028-19.965-29.89-29.408-13.29-10.582-29-20.76-47.223-30.443-35.07-18.624-74.482-31.61-115.265-38.046-39.78-6.28-80.84-6.256-120.39.917l1.37 31.562c1.8.164 7.7 3.9 14.36 8.32-20.68 5.94-39.77 14.447-39.48 39.683l.2 17.48 17.3-1.73c29.38-2.95 60.17-2.06 90.32 2.61 9.21 1.42 18.36 3.2 27.38 5.32l-4.33 1.15c-20.45 5.58-38.93 12.52-54.25 20.61-46.28 24.32-75.51 60.85-90.14 108.37-14.14 45.95-14.27 101.81-2.72 166.51l.06.06c15.14 84.57 64.16 316.39 104.11 505.39 19.78 93.59 37.38 176.83 47.14 224.4 3.26 15.84 5.03 31.02 5.52 45.52.3 9.08.09 17.96-.58 26.62-.45 5.8-1.11 11.51-1.96 17.112l31.62 4.75c.71-4.705 1.3-9.494 1.76-14.373 48.964 10.517 99.78 16.05 151.88 16.05 60.68 0 119.61-7.505 175.91-21.64 3.04 6.08 6.08 12.19 9.11 18.32l28.62-14.128c-2.11-4.27-4.235-8.55-6.37-12.84-23.005-46.124-47.498-93.01-68.67-133.534-15.39-29.466-29.01-55.53-39.046-75.58-26.826-53.618-53.637-119.47-68.28-182.368-8.78-37.705-13.128-74.098-10.308-105.627-15.31-6.28-26.69-11.8-31.968-15.59l-.01.015c-14.22-10.2-31.11-28.12-41.82-49.717-8.618-17.376-13.4-37.246-10.147-57.84 3.17-19.84 27.334-46.714 57.843-67.46v-.063c26.554-18.05 58.75-32.506 86.32-34.31 7.835-.51 16.31-1.008 23.99-1.45 33.45-1.95 50.243-2.93 84.475-11.42 10.88-2.697 26.19-6.56 43.53-11.09 2.364-40.7-5.947-87.596-21.04-133.234-22.004-66.53-58.68-131.25-97.627-170.21-12.543-12.55-28.17-22.79-45.9-30.933-16.88-7.753-35.64-13.615-55.436-17.782zm-10.658 178.553s6.77-42.485 58.39-33.977c27.96 4.654 37.89 29.833 37.89 29.833s-25.31-14.46-44.95-14.198c-40.33.53-51.35 18.342-51.35 18.342zm-240.45-18.802c48.49-19.853 72.11 11.298 72.11 11.298s-35.21-15.928-69.46 5.59c-34.19 21.477-32.92 43.452-32.92 43.452s-18.17-40.5 30.26-60.34zm296.5 95.4c0-6.677 2.68-12.694 7.01-17.02 4.37-4.37 10.42-7.074 17.1-7.074 6.73 0 12.79 2.7 17.15 7.05 4.33 4.33 7.01 10.36 7.01 17.05 0 6.74-2.7 12.81-7.07 17.18-4.33 4.33-10.37 7.01-17.1 7.01-6.68 0-12.72-2.69-17.05-7.03-4.36-4.37-7.07-10.43-7.07-17.16zm-268.42 51.27c0-8.535 3.41-16.22 8.93-21.738 5.55-5.55 13.25-8.982 21.81-8.982 8.51 0 16.18 3.415 21.7 8.934 5.55 5.55 8.98 13.25 8.98 21.78 0 8.53-3.44 16.23-8.98 21.79-5.52 5.52-13.19 8.93-21.71 8.93-8.55 0-16.26-3.43-21.82-8.99-5.52-5.52-8.93-13.2-8.93-21.74z"></path>
                                    <path d="M1102.48 986.34zm390.074-64.347c-28.917-11.34-74.89-12.68-93.32-3.778-11.5 5.567-35.743 13.483-63.565 21.707-25.75 7.606-53.9 15.296-78.15 21.702-17.69 4.67-33.3 8.66-44.4 11.435-34.92 8.76-52.05 9.77-86.17 11.78-7.84.46-16.48.97-24.48 1.5-28.12 1.86-60.97 16.77-88.05 35.4v.06c-31.12 21.4-55.77 49.12-59.01 69.59-3.32 21.24 1.56 41.74 10.35 59.67 10.92 22.28 28.15 40.77 42.66 51.29l.01-.02c5.38 3.9 16.98 9.6 32.6 16.08 26.03 10.79 63.2 23.76 101.25 34.23 43.6 11.99 89.11 21.05 121.69 20.41 34.26-.69 77.73-10.52 114.54-24.67 22.15-8.52 42.21-18.71 56.88-29.58 17.85-13.22 28.7-28.42 28.4-44.74-.07-3.89-.72-7.63-1.97-11.21l-.02.01c-11.6-33.06-50.37-23.59-105.53-10.12-46.86 11.445-107.94 26.365-169.01 20.434-32.56-3.167-54.45-10.61-67.88-20.133-5.96-4.224-9.93-8.67-12.18-13.11-1.96-3.865-2.68-7.84-2.33-11.714.39-4.42 2.17-9.048 5.1-13.57l-.05-.03c7.86-12.118 23.082-9.72 43.93-6.43 25.91 4.08 58.2 9.172 99.013-3.61 39.63-12.378 87.76-29.9 131.184-47.39 42.405-17.08 80.08-34.078 100.74-46.18 25.46-14.87 37.57-29.428 40.59-42.866 2.725-12.152-.89-22.48-8.903-31.07-5.87-6.29-14.254-11.31-23.956-15.115z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" target="_blank" href="https://stackoverflow.com/search?q=Illuminate%5CContracts%5CContainer%5CBindingResolutionException+Target+class+%5BApp%5CHttp%5CControllers%5CCkeditorController%5D+does+not+exist." title="Search for help on Stack Overflow.">
                                <!-- Stack Overflow icon by Picons.me, from https://www.iconfinder.com/Picons -->
                                <!-- Free for commercial use -->
                                <svg class="stackoverflow" height="16" viewBox="-1163 1657.697 56.693 56.693" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-1126.04 1689.533l-16.577-9.778 2.088-3.54 16.578 9.778zM-1127.386 1694.635l-18.586-4.996 1.068-3.97 18.586 4.995zM-1127.824 1700.137l-19.165-1.767.378-4.093 19.165 1.767zM-1147.263 1701.293h19.247v4.11h-19.247z"></path>
                                    <path d="M-1121.458 1710.947s0 .96-.032.96v.016h-30.796s-.96 0-.96-.016h-.032v-20.03h3.288v16.805h25.244v-16.804h3.288v19.07zM-1130.667 1667.04l10.844 15.903-3.396 2.316-10.843-15.903zM-1118.313 1663.044l3.29 18.963-4.05.703-3.29-18.963z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <span id="plain-exception">Illuminate\Contracts\Container\BindingResolutionException thrown with message "Target class [App\Http\Controllers\CkeditorController] does not exist."

Stacktrace:
#31 Illuminate\Contracts\Container\BindingResolutionException in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:805
#30 ReflectionException in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:803
#29 ReflectionClass:__construct in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:803
#28 Illuminate\Container\Container:build in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:681
#27 Illuminate\Container\Container:resolve in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php:785
#26 Illuminate\Foundation\Application:resolve in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:629
#25 Illuminate\Container\Container:make in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php:770
#24 Illuminate\Foundation\Application:make in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:233
#23 Illuminate\Routing\Route:getController in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:833
#22 Illuminate\Routing\Route:controllerMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:794
#21 Illuminate\Routing\Route:gatherMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:694
#20 Illuminate\Routing\Router:gatherRouteMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:674
#19 Illuminate\Routing\Router:runRouteWithinStack in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:658
#18 Illuminate\Routing\Router:runRoute in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:624
#17 Illuminate\Routing\Router:dispatchToRoute in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:613
#16 Illuminate\Routing\Router:dispatch in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:170
#15 Illuminate\Foundation\Http\Kernel:Illuminate\Foundation\Http\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:130
#14 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php:21
#13 Illuminate\Foundation\Http\Middleware\TransformsRequest:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#12 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php:21
#11 Illuminate\Foundation\Http\Middleware\TransformsRequest:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#10 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php:27
#9 Illuminate\Foundation\Http\Middleware\ValidatePostSize:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#8 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode.php:63
#7 Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#6 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\fideloper\proxy\src\TrustProxies.php:57
#5 Fideloper\Proxy\TrustProxies:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#4 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:105
#3 Illuminate\Pipeline\Pipeline:then in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:145
#2 Illuminate\Foundation\Http\Kernel:sendRequestThroughRouter in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:110
#1 Illuminate\Foundation\Http\Kernel:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\public\index.php:55
#0 require_once in C:\Users\AHMAD SHOJAAT\Desktop\project\project\server.php:21
</span>
                    <button id="copy-button" class="rightButton clipboard" data-clipboard-text="Illuminate\Contracts\Container\BindingResolutionException thrown with message &quot;Target class [App\Http\Controllers\CkeditorController] does not exist.&quot;

Stacktrace:
#31 Illuminate\Contracts\Container\BindingResolutionException in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:805
#30 ReflectionException in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:803
#29 ReflectionClass:__construct in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:803
#28 Illuminate\Container\Container:build in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:681
#27 Illuminate\Container\Container:resolve in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php:785
#26 Illuminate\Foundation\Application:resolve in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php:629
#25 Illuminate\Container\Container:make in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php:770
#24 Illuminate\Foundation\Application:make in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:233
#23 Illuminate\Routing\Route:getController in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:833
#22 Illuminate\Routing\Route:controllerMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php:794
#21 Illuminate\Routing\Route:gatherMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:694
#20 Illuminate\Routing\Router:gatherRouteMiddleware in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:674
#19 Illuminate\Routing\Router:runRouteWithinStack in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:658
#18 Illuminate\Routing\Router:runRoute in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:624
#17 Illuminate\Routing\Router:dispatchToRoute in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php:613
#16 Illuminate\Routing\Router:dispatch in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:170
#15 Illuminate\Foundation\Http\Kernel:Illuminate\Foundation\Http\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:130
#14 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php:21
#13 Illuminate\Foundation\Http\Middleware\TransformsRequest:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#12 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php:21
#11 Illuminate\Foundation\Http\Middleware\TransformsRequest:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#10 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php:27
#9 Illuminate\Foundation\Http\Middleware\ValidatePostSize:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#8 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode.php:63
#7 Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#6 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\fideloper\proxy\src\TrustProxies.php:57
#5 Fideloper\Proxy\TrustProxies:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:171
#4 Illuminate\Pipeline\Pipeline:Illuminate\Pipeline\{closure} in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php:105
#3 Illuminate\Pipeline\Pipeline:then in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:145
#2 Illuminate\Foundation\Http\Kernel:sendRequestThroughRouter in C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php:110
#1 Illuminate\Foundation\Http\Kernel:handle in C:\Users\AHMAD SHOJAAT\Desktop\project\project\public\index.php:55
#0 require_once in C:\Users\AHMAD SHOJAAT\Desktop\project\project\server.php:21
" title="Copy exception details to clipboard">
                        COPY
                    </button>
                    <button id="hide-error" class="rightButton" title="Hide error message" onclick="document.getElementsByClassName('Whoops')[0].style.display = 'none';">
                        HIDE
                    </button>
                </div>
            </div>
        </header>
        <div class="frames-description frames-description-application">
            <a href="#" id="application-frames-tab" class="frames-tab ">
                Application frames (1)
            </a>
            <a href="#" id="all-frames-tab" class="frames-tab frames-tab-active">
                All frames (32)
            </a>
        </div>
        <div class="frames-container " style="
    height: 500px;
">
            <div class="frame" id="frame-line-0">
                <span class="frame-index">31</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Contracts</span>\<span class="delimiter">Container</span>\<span class="delimiter">BindingResolutionException</span></span>
                    <span class="frame-function"><span class="delimiter"></span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Container\Container.php</span><!--
   --><span class="frame-line">805</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-1">
                <span class="frame-index">30</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">ReflectionException</span></span>
                    <span class="frame-function"><span class="delimiter"></span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Container\Container.php</span><!--
   --><span class="frame-line">803</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-2">
                <span class="frame-index">29</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">ReflectionClass</span></span>
                    <span class="frame-function"><span class="delimiter">__construct</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Container\Container.php</span><!--
   --><span class="frame-line">803</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-3">
                <span class="frame-index">28</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Container</span>\<span class="delimiter">Container</span></span>
                    <span class="frame-function"><span class="delimiter">build</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Container\Container.php</span><!--
   --><span class="frame-line">681</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-4">
                <span class="frame-index">27</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Container</span>\<span class="delimiter">Container</span></span>
                    <span class="frame-function"><span class="delimiter">resolve</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Application.php</span><!--
   --><span class="frame-line">785</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-5">
                <span class="frame-index">26</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Application</span></span>
                    <span class="frame-function"><span class="delimiter">resolve</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Container\Container.php</span><!--
   --><span class="frame-line">629</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-6">
                <span class="frame-index">25</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Container</span>\<span class="delimiter">Container</span></span>
                    <span class="frame-function"><span class="delimiter">make</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Application.php</span><!--
   --><span class="frame-line">770</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-7">
                <span class="frame-index">24</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Application</span></span>
                    <span class="frame-function"><span class="delimiter">make</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span><!--
   --><span class="frame-line">233</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-8">
                <span class="frame-index">23</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Route</span></span>
                    <span class="frame-function"><span class="delimiter">getController</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span><!--
   --><span class="frame-line">833</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-9">
                <span class="frame-index">22</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Route</span></span>
                    <span class="frame-function"><span class="delimiter">controllerMiddleware</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span><!--
   --><span class="frame-line">794</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-10">
                <span class="frame-index">21</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Route</span></span>
                    <span class="frame-function"><span class="delimiter">gatherMiddleware</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span><!--
   --><span class="frame-line">694</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-11">
                <span class="frame-index">20</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Router</span></span>
                    <span class="frame-function"><span class="delimiter">gatherRouteMiddleware</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span><!--
   --><span class="frame-line">674</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-12">
                <span class="frame-index">19</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Router</span></span>
                    <span class="frame-function"><span class="delimiter">runRouteWithinStack</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span><!--
   --><span class="frame-line">658</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-13">
                <span class="frame-index">18</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Router</span></span>
                    <span class="frame-function"><span class="delimiter">runRoute</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span><!--
   --><span class="frame-line">624</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-14">
                <span class="frame-index">17</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Router</span></span>
                    <span class="frame-function"><span class="delimiter">dispatchToRoute</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span><!--
   --><span class="frame-line">613</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-15">
                <span class="frame-index">16</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Routing</span>\<span class="delimiter">Router</span></span>
                    <span class="frame-function"><span class="delimiter">dispatch</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span><!--
   --><span class="frame-line">170</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-16">
                <span class="frame-index">15</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Kernel</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">130</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-17">
                <span class="frame-index">14</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span><!--
   --><span class="frame-line">21</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-18">
                <span class="frame-index">13</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Middleware</span>\<span class="delimiter">TransformsRequest</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">171</span>
                </div>
            </div>
            <div class="frame   active" id="frame-line-19">
                <span class="frame-index">12</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span><!--
   --><span class="frame-line">21</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-20">
                <span class="frame-index">11</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Middleware</span>\<span class="delimiter">TransformsRequest</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">171</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-21">
                <span class="frame-index">10</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php</span><!--
   --><span class="frame-line">27</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-22">
                <span class="frame-index">9</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Middleware</span>\<span class="delimiter">ValidatePostSize</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">171</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-23">
                <span class="frame-index">8</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode.php</span><!--
   --><span class="frame-line">63</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-24">
                <span class="frame-index">7</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Middleware</span>\<span class="delimiter">CheckForMaintenanceMode</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">171</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-25">
                <span class="frame-index">6</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\fideloper\proxy\src\TrustProxies.php</span><!--
   --><span class="frame-line">57</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-26">
                <span class="frame-index">5</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Fideloper</span>\<span class="delimiter">Proxy</span>\<span class="delimiter">TrustProxies</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">171</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-27">
                <span class="frame-index">4</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">{closure}</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span><!--
   --><span class="frame-line">105</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-28">
                <span class="frame-index">3</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Pipeline</span>\<span class="delimiter">Pipeline</span></span>
                    <span class="frame-function"><span class="delimiter">then</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span><!--
   --><span class="frame-line">145</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-29">
                <span class="frame-index">2</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Kernel</span></span>
                    <span class="frame-function"><span class="delimiter">sendRequestThroughRouter</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span><!--
   --><span class="frame-line">110</span>
                </div>
            </div>
            <div class="frame  frame-application" id="frame-line-30">
                <span class="frame-index">1</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter">Illuminate</span>\<span class="delimiter">Foundation</span>\<span class="delimiter">Http</span>\<span class="delimiter">Kernel</span></span>
                    <span class="frame-function"><span class="delimiter">handle</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\public\index.php</span><!--
   --><span class="frame-line">55</span>
                </div>
            </div>
            <div class="frame  " id="frame-line-31">
                <span class="frame-index">0</span>
                <div class="frame-method-info">
                    <span class="frame-class"><span class="delimiter"></span></span>
                    <span class="frame-function"><span class="delimiter">require_once</span></span>
                </div>

                <div class="frame-file">
                    <span class="delimiter">…\server.php</span><!--
   --><span class="frame-line">21</span>
                </div>
            </div>
        </div></div>
    <div class="panel details-container cf">
        <div class="frame-code-container ">
            <div class="frame-code" id="frame-code-0">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php</span></strong>
                </div>
                <pre id="frame-code-linenums-0" class="code-block linenums:786 prettyprinted" style="max-height: 345px; overflow: hidden;"><ol class="linenums"><li value="786" class="L5"><span class="pln">     </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Instantiate</span><span class="pln"> a concrete instance of the given type</span><span class="pun">.</span></li><li class="L6"><span class="pln">     </span><span class="pun">*</span></li><li class="L7"><span class="pln">     </span><span class="pun">*</span><span class="pln"> </span><span class="lit">@param</span><span class="pln">  </span><span class="kwd">string</span><span class="pln">  $concrete</span></li><li class="L8"><span class="pln">     </span><span class="pun">*</span><span class="pln"> </span><span class="lit">@return</span><span class="pln"> mixed</span></li><li class="L9"><span class="pln">     </span><span class="pun">*</span></li><li class="L0"><span class="pln">     </span><span class="pun">*</span><span class="pln"> </span><span class="lit">@throws</span><span class="pln"> \Illuminate\Contracts\Container\BindingResolutionException</span></li><li class="L1"><span class="pln">     </span><span class="pun">*</span><span class="str">/</span></li><li class="L2"><span class="str">    public function build($concrete)</span></li><li class="L3"><span class="str">    {</span></li><li class="L4"><span class="str">        /</span><span class="pun">/</span><span class="pln"> </span><span class="typ">If</span><span class="pln"> the concrete type </span><span class="kwd">is</span><span class="pln"> actually a </span><span class="typ">Closure</span><span class="pun">,</span><span class="pln"> we will just execute it </span><span class="kwd">and</span></li><li class="L5"><span class="pln">        </span><span class="com">// hand back the results of the functions, which allows functions to be</span></li><li class="L6"><span class="pln">        </span><span class="com">// used as resolvers for more fine-tuned resolution of these objects.</span></li><li class="L7"><span class="pln">        </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$concrete </span><span class="kwd">instanceof</span><span class="pln"> </span><span class="typ">Closure</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L8"><span class="pln">            </span><span class="kwd">return</span><span class="pln"> $concrete</span><span class="pun">(</span><span class="pln">$this</span><span class="pun">,</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">getLastParameterOverride</span><span class="pun">());</span></li><li class="L9"><span class="pln">        </span><span class="pun">}</span></li><li class="L0"><span class="pln"> </span></li><li class="L1"><span class="pln">        </span><span class="kwd">try</span><span class="pln"> </span><span class="pun">{</span></li><li class="L2"><span class="pln">            $reflector </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ReflectionClass</span><span class="pun">(</span><span class="pln">$concrete</span><span class="pun">);</span></li><li class="L3 current"><span class="pln">        </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="typ">ReflectionException</span><span class="pln"> $e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L4 current active"><span class="pln">            </span><span class="kwd">throw</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">BindingResolutionException</span><span class="pun">(</span><span class="str">"Target class [$concrete] does not exist."</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> $e</span><span class="pun">);</span></li><li class="L5 current"><span class="pln">        </span><span class="pun">}</span></li><li class="L6"><span class="pln"> </span></li><li class="L7"><span class="pln">        </span><span class="com">// If the type is not instantiable, the developer is attempting to resolve</span></li><li class="L8"><span class="pln">        </span><span class="com">// an abstract type such as an Interface or Abstract Class and there is</span></li><li class="L9"><span class="pln">        </span><span class="com">// no binding registered for the abstractions so we need to bail out.</span></li><li class="L0"><span class="pln">        </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln"> $reflector</span><span class="pun">-&gt;</span><span class="pln">isInstantiable</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span></li><li class="L1"><span class="pln">            </span><span class="kwd">return</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">notInstantiable</span><span class="pun">(</span><span class="pln">$concrete</span><span class="pun">);</span></li><li class="L2"><span class="pln">        </span><span class="pun">}</span></li><li class="L3"><span class="pln"> </span></li><li class="L4"><span class="pln">        $this</span><span class="pun">-&gt;</span><span class="pln">buildStack</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> $concrete</span><span class="pun">;</span></li><li class="L5"><span class="pln"> </span></li><li class="L6"><span class="pln">        $constructor </span><span class="pun">=</span><span class="pln"> $reflector</span><span class="pun">-&gt;</span><span class="pln">getConstructor</span><span class="pun">();</span></li><li class="L7"><span class="pln"> </span></li><li class="L8"><span class="pln">        </span><span class="com">// If there are no constructors, that means there are no dependencies then</span></li><li class="L9"><span class="pln">        </span><span class="com">// we can just resolve the instances of the objects right away, without</span></li><li class="L0"><span class="pln">        </span><span class="com">// resolving any other types or dependencies out of these containers.</span></li><li class="L1"><span class="pln">        </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">is_null</span><span class="pun">(</span><span class="pln">$constructor</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span></li><li class="L2"><span class="pln">            array_pop</span><span class="pun">(</span><span class="pln">$this</span><span class="pun">-&gt;</span><span class="pln">buildStack</span><span class="pun">);</span></li><li class="L3"><span class="pln"> </span></li><li class="L4"><span class="pln">            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> $concrete</span><span class="pun">;</span></li></ol></pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-0" class="code-block frame-args">
                    <ol class="linenums"><li><script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '&#9660;'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '&#9654;'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>&#9660;</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } elt.setAttribute('data-depth', x); var className = elt.className; elt.className = 'sf-dump-expanded'; if (className ? 'sf-dump-expanded' !== className : (x > options.maxDepth)) { toggle(a); } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>&#9654;</span>'; } else { elt.innerHTML = '<span>&#9654;</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '&hellip;'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> &#9664;</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> &#9654;</a></span>'; } } } catch (e) { } }; })(document); </script><style> pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } pre.sf-dump span { display: inline; } pre.sf-dump .sf-dump-compact { display: none; } pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-str-collapse .sf-dump-str-collapse { display: none; } .sf-dump-str-expand .sf-dump-str-expand { display: none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } pre.sf-dump .sf-dump-search-hidden { display: none !important; } pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }pre.sf-dump, pre.sf-dump .sf-dump-default{color:#FFFFFF; line-height:normal; font:12px "Inconsolata", "Fira Mono", "Source Code Pro", Monaco, Consolas, "Lucida Console", monospace !important; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: normal}pre.sf-dump .sf-dump-num{color:#BCD42A}pre.sf-dump .sf-dump-const{color: #4bb1b1;}pre.sf-dump .sf-dump-str{color:#BCD42A}pre.sf-dump .sf-dump-note{color:#ef7c61}pre.sf-dump .sf-dump-ref{color:#A0A0A0}pre.sf-dump .sf-dump-public{color:#FFFFFF}pre.sf-dump .sf-dump-protected{color:#FFFFFF}pre.sf-dump .sf-dump-private{color:#FFFFFF}pre.sf-dump .sf-dump-meta{color:#FFFFFF}pre.sf-dump .sf-dump-key{color:#BCD42A}pre.sf-dump .sf-dump-index{color:#ef7c61}pre.sf-dump .sf-dump-ellipsis{color:#FF8400}pre.sf-dump .sf-dump-ns{user-select:none;}pre.sf-dump .sf-dump-ellipsis-note{color:#ef7c61}</style><pre class="sf-dump" id="sf-dump-1294679377" data-indent-pad="  ">"<span class="sf-dump-str" title="70 characters">Target class [App\Http\Controllers\CkeditorController] does not exist.</span>"
</pre><script>Sfdump("sf-dump-1294679377")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-1">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php</span></strong>
                </div>
                <pre id="frame-code-linenums-1" class="code-block linenums:784">
    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param  string  $concrete
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function build($concrete)
    {
        // If the concrete type is actually a Closure, we will just execute it and
        // hand back the results of the functions, which allows functions to be
        // used as resolvers for more fine-tuned resolution of these objects.
        if ($concrete instanceof Closure) {
            return $concrete($this, $this-&gt;getLastParameterOverride());
        }

        try {
            $reflector = new ReflectionClass($concrete);
        } catch (ReflectionException $e) {
            throw new BindingResolutionException("Target class [$concrete] does not exist.", 0, $e);
        }

        // If the type is not instantiable, the developer is attempting to resolve
        // an abstract type such as an Interface or Abstract Class and there is
        // no binding registered for the abstractions so we need to bail out.
        if (! $reflector-&gt;isInstantiable()) {
            return $this-&gt;notInstantiable($concrete);
        }

        $this-&gt;buildStack[] = $concrete;

        $constructor = $reflector-&gt;getConstructor();

        // If there are no constructors, that means there are no dependencies then
        // we can just resolve the instances of the objects right away, without
        // resolving any other types or dependencies out of these containers.
        if (is_null($constructor)) {
            array_pop($this-&gt;buildStack);</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-1" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-2112375860" data-indent-pad="  ">"<span class="sf-dump-str" title="60 characters">Class App\Http\Controllers\CkeditorController does not exist</span>"
</pre><script>Sfdump("sf-dump-2112375860")</script>
                        </li></ol>          </div>

                <div class="frame-comments ">
                    <div class="frame-comment" id="comment-1-0">
                        <span class="frame-comment-context">Exception message:</span>
                        Class App\Http\Controllers\CkeditorController does not exist            </div>
                </div>

            </div>
            <div class="frame-code " id="frame-code-2">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php</span></strong>
                </div>
                <pre id="frame-code-linenums-2" class="code-block linenums:784">
    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param  string  $concrete
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function build($concrete)
    {
        // If the concrete type is actually a Closure, we will just execute it and
        // hand back the results of the functions, which allows functions to be
        // used as resolvers for more fine-tuned resolution of these objects.
        if ($concrete instanceof Closure) {
            return $concrete($this, $this-&gt;getLastParameterOverride());
        }

        try {
            $reflector = new ReflectionClass($concrete);
        } catch (ReflectionException $e) {
            throw new BindingResolutionException("Target class [$concrete] does not exist.", 0, $e);
        }

        // If the type is not instantiable, the developer is attempting to resolve
        // an abstract type such as an Interface or Abstract Class and there is
        // no binding registered for the abstractions so we need to bail out.
        if (! $reflector-&gt;isInstantiable()) {
            return $this-&gt;notInstantiable($concrete);
        }

        $this-&gt;buildStack[] = $concrete;

        $constructor = $reflector-&gt;getConstructor();

        // If there are no constructors, that means there are no dependencies then
        // we can just resolve the instances of the objects right away, without
        // resolving any other types or dependencies out of these containers.
        if (is_null($constructor)) {
            array_pop($this-&gt;buildStack);</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-2" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1697337794" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-1697337794")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-3">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php</span></strong>
                </div>
                <pre id="frame-code-linenums-3" class="code-block linenums:662">        $needsContextualBuild = ! empty($parameters) || ! is_null(
            $this-&gt;getContextualConcrete($abstract)
        );

        // If an instance of the type is currently being managed as a singleton we'll
        // just return an existing instance instead of instantiating new instances
        // so the developer can keep using the same objects instance every time.
        if (isset($this-&gt;instances[$abstract]) &amp;&amp; ! $needsContextualBuild) {
            return $this-&gt;instances[$abstract];
        }

        $this-&gt;with[] = $parameters;

        $concrete = $this-&gt;getConcrete($abstract);

        // We're ready to instantiate an instance of the concrete type registered for
        // the binding. This will instantiate the types, as well as resolve any of
        // its "nested" dependencies recursively until all have gotten resolved.
        if ($this-&gt;isBuildable($concrete, $abstract)) {
            $object = $this-&gt;build($concrete);
        } else {
            $object = $this-&gt;make($concrete);
        }

        // If we defined any extenders for this type, we'll need to spin through them
        // and apply them to the object being built. This allows for the extension
        // of services, such as changing configuration or decorating the object.
        foreach ($this-&gt;getExtenders($abstract) as $extender) {
            $object = $extender($object, $this);
        }

        // If the requested type is registered as a singleton we'll want to cache off
        // the instances in "memory" so we can return it later without creating an
        // entirely new instance of an object on each subsequent request for it.
        if ($this-&gt;isShared($abstract) &amp;&amp; ! $needsContextualBuild) {
            $this-&gt;instances[$abstract] = $object;
        }

        if ($raiseEvents) {
            $this-&gt;fireResolvingCallbacks($abstract, $object);</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-3" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1225902511" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-1225902511")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-4">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php</span></strong>
                </div>
                <pre id="frame-code-linenums-4" class="code-block linenums:766">    public function make($abstract, array $parameters = [])
    {
        $this-&gt;loadDeferredProviderIfNeeded($abstract = $this-&gt;getAlias($abstract));

        return parent::make($abstract, $parameters);
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @param  array  $parameters
     * @param  bool  $raiseEvents
     * @return mixed
     */
    protected function resolve($abstract, $parameters = [], $raiseEvents = true)
    {
        $this-&gt;loadDeferredProviderIfNeeded($abstract = $this-&gt;getAlias($abstract));

        return parent::resolve($abstract, $parameters, $raiseEvents);
    }

    /**
     * Load the deferred provider if the given type is a deferred service and the instance has not been loaded.
     *
     * @param  string  $abstract
     * @return void
     */
    protected function loadDeferredProviderIfNeeded($abstract)
    {
        if ($this-&gt;isDeferredService($abstract) &amp;&amp; ! isset($this-&gt;instances[$abstract])) {
            $this-&gt;loadDeferredProvider($abstract);
        }
    }

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param  string  $abstract
     * @return bool</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-4" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1094874380" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-1094874380")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-913514579" data-indent-pad="  ">[]
</pre><script>Sfdump("sf-dump-913514579")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-1024229603" data-indent-pad="  "><span class="sf-dump-const">true</span>
</pre><script>Sfdump("sf-dump-1024229603")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-5">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Container\Container.php</span></strong>
                </div>
                <pre id="frame-code-linenums-5" class="code-block linenums:610">     * @param  array  $parameters
     * @return mixed
     */
    public function makeWith($abstract, array $parameters = [])
    {
        return $this-&gt;make($abstract, $parameters);
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function make($abstract, array $parameters = [])
    {
        return $this-&gt;resolve($abstract, $parameters);
    }

    /**
     *  {@inheritdoc}
     */
    public function get($id)
    {
        try {
            return $this-&gt;resolve($id);
        } catch (Exception $e) {
            if ($this-&gt;has($id)) {
                throw $e;
            }

            throw new EntryNotFoundException($id, $e-&gt;getCode(), $e);
        }
    }

    /**
     * Resolve the given type from the container.</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-5" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-267202985" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-267202985")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-1389534838" data-indent-pad="  ">[]
</pre><script>Sfdump("sf-dump-1389534838")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-6">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Application.php</span></strong>
                </div>
                <pre id="frame-code-linenums-6" class="code-block linenums:751">
        if (! $this-&gt;isBooted()) {
            $this-&gt;booting(function () use ($instance) {
                $this-&gt;bootProvider($instance);
            });
        }
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @param  array  $parameters
     * @return mixed
     */
    public function make($abstract, array $parameters = [])
    {
        $this-&gt;loadDeferredProviderIfNeeded($abstract = $this-&gt;getAlias($abstract));

        return parent::make($abstract, $parameters);
    }

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @param  array  $parameters
     * @param  bool  $raiseEvents
     * @return mixed
     */
    protected function resolve($abstract, $parameters = [], $raiseEvents = true)
    {
        $this-&gt;loadDeferredProviderIfNeeded($abstract = $this-&gt;getAlias($abstract));

        return parent::resolve($abstract, $parameters, $raiseEvents);
    }

    /**
     * Load the deferred provider if the given type is a deferred service and the instance has not been loaded.
     *</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-6" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-268482196" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-268482196")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-2075064821" data-indent-pad="  ">[]
</pre><script>Sfdump("sf-dump-2075064821")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-7">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span></strong>
                </div>
                <pre id="frame-code-linenums-7" class="code-block linenums:214">     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    protected function runController()
    {
        return $this-&gt;controllerDispatcher()-&gt;dispatch(
            $this, $this-&gt;getController(), $this-&gt;getControllerMethod()
        );
    }

    /**
     * Get the controller instance for the route.
     *
     * @return mixed
     */
    public function getController()
    {
        if (! $this-&gt;controller) {
            $class = $this-&gt;parseControllerCallback()[0];

            $this-&gt;controller = $this-&gt;container-&gt;make(ltrim($class, '\\'));
        }

        return $this-&gt;controller;
    }

    /**
     * Get the controller method used for the route.
     *
     * @return string
     */
    protected function getControllerMethod()
    {
        return $this-&gt;parseControllerCallback()[1];
    }

    /**
     * Parse the controller.
     *
     * @return array
     */</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-7" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1308959400" data-indent-pad="  ">"<span class="sf-dump-str" title="39 characters">App\Http\Controllers\CkeditorController</span>"
</pre><script>Sfdump("sf-dump-1308959400")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-8">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span></strong>
                </div>
                <pre id="frame-code-linenums-8" class="code-block linenums:814">        $this-&gt;action['middleware'] = array_merge(
            (array) ($this-&gt;action['middleware'] ?? []), $middleware
        );

        return $this;
    }

    /**
     * Get the middleware for the route's controller.
     *
     * @return array
     */
    public function controllerMiddleware()
    {
        if (! $this-&gt;isControllerAction()) {
            return [];
        }

        return $this-&gt;controllerDispatcher()-&gt;getMiddleware(
            $this-&gt;getController(), $this-&gt;getControllerMethod()
        );
    }

    /**
     * Get the dispatcher for the route's controller.
     *
     * @return \Illuminate\Routing\Contracts\ControllerDispatcher
     */
    public function controllerDispatcher()
    {
        if ($this-&gt;container-&gt;bound(ControllerDispatcherContract::class)) {
            return $this-&gt;container-&gt;make(ControllerDispatcherContract::class);
        }

        return new ControllerDispatcher($this-&gt;container);
    }

    /**
     * Get the route validators for the instance.
     *</pre>



                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-9">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Route.php</span></strong>
                </div>
                <pre id="frame-code-linenums-9" class="code-block linenums:775">        $this-&gt;action = $action;

        return $this;
    }

    /**
     * Get all middleware, including the ones from the controller.
     *
     * @return array
     */
    public function gatherMiddleware()
    {
        if (! is_null($this-&gt;computedMiddleware)) {
            return $this-&gt;computedMiddleware;
        }

        $this-&gt;computedMiddleware = [];

        return $this-&gt;computedMiddleware = array_unique(array_merge(
            $this-&gt;middleware(), $this-&gt;controllerMiddleware()
        ), SORT_REGULAR);
    }

    /**
     * Get or set the middlewares attached to the route.
     *
     * @param  array|string|null  $middleware
     * @return $this|array
     */
    public function middleware($middleware = null)
    {
        if (is_null($middleware)) {
            return (array) ($this-&gt;action['middleware'] ?? []);
        }

        if (is_string($middleware)) {
            $middleware = func_get_args();
        }

        $this-&gt;action['middleware'] = array_merge(</pre>



                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-10">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span></strong>
                </div>
                <pre id="frame-code-linenums-10" class="code-block linenums:675">
        return (new Pipeline($this-&gt;container))
                        -&gt;send($request)
                        -&gt;through($middleware)
                        -&gt;then(function ($request) use ($route) {
                            return $this-&gt;prepareResponse(
                                $request, $route-&gt;run()
                            );
                        });
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
    {
        $middleware = collect($route-&gt;gatherMiddleware())-&gt;map(function ($name) {
            return (array) MiddlewareNameResolver::resolve($name, $this-&gt;middleware, $this-&gt;middlewareGroups);
        })-&gt;flatten();

        return $this-&gt;sortMiddleware($middleware);
    }

    /**
     * Sort the given middleware by priority.
     *
     * @param  \Illuminate\Support\Collection  $middlewares
     * @return array
     */
    protected function sortMiddleware(Collection $middlewares)
    {
        return (new SortedMiddleware($this-&gt;middlewarePriority, $middlewares))-&gt;all();
    }

    /**
     * Create a response instance from the given value.
     *</pre>



                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-11">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span></strong>
                </div>
                <pre id="frame-code-linenums-11" class="code-block linenums:655">        $this-&gt;events-&gt;dispatch(new RouteMatched($route, $request));

        return $this-&gt;prepareResponse($request,
            $this-&gt;runRouteWithinStack($route, $request)
        );
    }

    /**
     * Run the given route within a Stack "onion" instance.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function runRouteWithinStack(Route $route, Request $request)
    {
        $shouldSkipMiddleware = $this-&gt;container-&gt;bound('middleware.disable') &amp;&amp;
                                $this-&gt;container-&gt;make('middleware.disable') === true;

        $middleware = $shouldSkipMiddleware ? [] : $this-&gt;gatherRouteMiddleware($route);

        return (new Pipeline($this-&gt;container))
                        -&gt;send($request)
                        -&gt;through($middleware)
                        -&gt;then(function ($request) use ($route) {
                            return $this-&gt;prepareResponse(
                                $request, $route-&gt;run()
                            );
                        });
    }

    /**
     * Gather the middleware for the given route with resolved class names.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return array
     */
    public function gatherRouteMiddleware(Route $route)
    {
        $middleware = collect($route-&gt;gatherMiddleware())-&gt;map(function ($name) {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-11" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-958758440" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Routing\Route</span> {<a class="sf-dump-ref">#136</a>}
</pre><script>Sfdump("sf-dump-958758440")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-12">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span></strong>
                </div>
                <pre id="frame-code-linenums-12" class="code-block linenums:639">        return $route;
    }

    /**
     * Return the response for the given route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Routing\Route  $route
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function runRoute(Request $request, Route $route)
    {
        $request-&gt;setRouteResolver(function () use ($route) {
            return $route;
        });

        $this-&gt;events-&gt;dispatch(new RouteMatched($route, $request));

        return $this-&gt;prepareResponse($request,
            $this-&gt;runRouteWithinStack($route, $request)
        );
    }

    /**
     * Run the given route within a Stack "onion" instance.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function runRouteWithinStack(Route $route, Request $request)
    {
        $shouldSkipMiddleware = $this-&gt;container-&gt;bound('middleware.disable') &amp;&amp;
                                $this-&gt;container-&gt;make('middleware.disable') === true;

        $middleware = $shouldSkipMiddleware ? [] : $this-&gt;gatherRouteMiddleware($route);

        return (new Pipeline($this-&gt;container))
                        -&gt;send($request)
                        -&gt;through($middleware)</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-12" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1920835432" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Routing\Route</span> {<a class="sf-dump-ref">#136</a>}
</pre><script>Sfdump("sf-dump-1920835432")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-455977157" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-455977157")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-13">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span></strong>
                </div>
                <pre id="frame-code-linenums-13" class="code-block linenums:605">     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatch(Request $request)
    {
        $this-&gt;currentRequest = $request;

        return $this-&gt;dispatchToRoute($request);
    }

    /**
     * Dispatch the request to a route and return the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this-&gt;runRoute($request, $this-&gt;findRoute($request));
    }

    /**
     * Find the route matching a given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Routing\Route
     */
    protected function findRoute($request)
    {
        $this-&gt;current = $route = $this-&gt;routes-&gt;match($request);

        $this-&gt;container-&gt;instance(Route::class, $route);

        return $route;
    }

    /**
     * Return the response for the given route.
     *</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-13" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1007471975" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1007471975")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-1997202511" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Routing\Route</span> {<a class="sf-dump-ref">#136</a>}
</pre><script>Sfdump("sf-dump-1997202511")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-14">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Routing\Router.php</span></strong>
                </div>
                <pre id="frame-code-linenums-14" class="code-block linenums:594">     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function respondWithRoute($name)
    {
        $route = tap($this-&gt;routes-&gt;getByName($name))-&gt;bind($this-&gt;currentRequest);

        return $this-&gt;runRoute($this-&gt;currentRequest, $route);
    }

    /**
     * Dispatch the request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatch(Request $request)
    {
        $this-&gt;currentRequest = $request;

        return $this-&gt;dispatchToRoute($request);
    }

    /**
     * Dispatch the request to a route and return the response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dispatchToRoute(Request $request)
    {
        return $this-&gt;runRoute($request, $this-&gt;findRoute($request));
    }

    /**
     * Find the route matching a given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Routing\Route
     */
    protected function findRoute($request)</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-14" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-388317801" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-388317801")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-15">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span></strong>
                </div>
                <pre id="frame-code-linenums-15" class="code-block linenums:151">     * @return void
     */
    public function bootstrap()
    {
        if (! $this-&gt;app-&gt;hasBeenBootstrapped()) {
            $this-&gt;app-&gt;bootstrapWith($this-&gt;bootstrappers());
        }
    }

    /**
     * Get the route dispatcher callback.
     *
     * @return \Closure
     */
    protected function dispatchToRouter()
    {
        return function ($request) {
            $this-&gt;app-&gt;instance('request', $request);

            return $this-&gt;router-&gt;dispatch($request);
        };
    }

    /**
     * Call the terminate method on any terminable middleware.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
        $this-&gt;terminateMiddleware($request, $response);

        $this-&gt;app-&gt;terminate();
    }

    /**
     * Call the terminate method on any terminable middleware.
     *</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-15" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1192509596" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1192509596")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-16">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-16" class="code-block linenums:111">     * @return mixed
     */
    public function thenReturn()
    {
        return $this-&gt;then(function ($passable) {
            return $passable;
        });
    }

    /**
     * Get the final piece of the Closure onion.
     *
     * @param  \Closure  $destination
     * @return \Closure
     */
    protected function prepareDestination(Closure $destination)
    {
        return function ($passable) use ($destination) {
            try {
                return $destination($passable);
            } catch (Exception $e) {
                return $this-&gt;handleException($passable, $e);
            } catch (Throwable $e) {
                return $this-&gt;handleException($passable, new FatalThrowableError($e));
            }
        };
    }

    /**
     * Get a Closure that represents a slice of the application onion.
     *
     * @return \Closure
     */
    protected function carry()
    {
        return function ($stack, $pipe) {
            return function ($passable) use ($stack, $pipe) {
                try {
                    if (is_callable($pipe)) {
                        // If the pipe is a callable, then we will call it directly, but otherwise we</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-16" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1501397021" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1501397021")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-17">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span></strong>
                </div>
                <pre id="frame-code-linenums-17" class="code-block linenums:2">
namespace Illuminate\Foundation\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\ParameterBag;

class TransformsRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this-&gt;clean($request);

        return $next($request);
    }

    /**
     * Clean the request's data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function clean($request)
    {
        $this-&gt;cleanParameterBag($request-&gt;query);

        if ($request-&gt;isJson()) {
            $this-&gt;cleanParameterBag($request-&gt;json());
        } elseif ($request-&gt;request !== $request-&gt;query) {
            $this-&gt;cleanParameterBag($request-&gt;request);
        }
    }

    /**</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-17" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-939034341" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-939034341")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-18">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-18" class="code-block linenums:152">                        // the appropriate method and arguments, returning the results back out.
                        return $pipe($passable, $stack);
                    } elseif (! is_object($pipe)) {
                        [$name, $parameters] = $this-&gt;parsePipeString($pipe);

                        // If the pipe is a string we will parse the string and resolve the class out
                        // of the dependency injection container. We can then build a callable and
                        // execute the pipe function giving in the parameters that are required.
                        $pipe = $this-&gt;getContainer()-&gt;make($name);

                        $parameters = array_merge([$passable, $stack], $parameters);
                    } else {
                        // If the pipe is already an object we'll just make a callable and pass it to
                        // the pipe as-is. There is no need to do any extra parsing and formatting
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                                    ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Exception $e) {
                    return $this-&gt;handleException($passable, $e);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, new FatalThrowableError($e));
                }
            };
        };
    }

    /**
     * Parse full pipe string to get name and parameters.
     *
     * @param  string  $pipe
     * @return array
     */
    protected function parsePipeString($pipe)
    {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-18" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-854514315" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-854514315")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-365669194" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($passable)</span> {<a class="sf-dump-ref">#130</a> …4}
</pre><script>Sfdump("sf-dump-365669194")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code  active" id="frame-code-19">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php</span></strong>
                </div>
                <pre id="frame-code-linenums-19" class="code-block linenums:2 prettyprint prettyprinted" style="max-height: 345px; overflow: hidden;"><ol class="linenums"><li value="2" class="L1"><span class="pln"> </span></li><li class="L2"><span class="kwd">namespace</span><span class="pln"> </span><span class="typ">Illuminate</span><span class="pln">\Foundation\Http\Middleware</span><span class="pun">;</span></li><li class="L3"><span class="pln"> </span></li><li class="L4"><span class="kwd">use</span><span class="pln"> </span><span class="typ">Closure</span><span class="pun">;</span></li><li class="L5"><span class="kwd">use</span><span class="pln"> </span><span class="typ">Symfony</span><span class="pln">\Component\HttpFoundation\ParameterBag</span><span class="pun">;</span></li><li class="L6"><span class="pln"> </span></li><li class="L7"><span class="kwd">class</span><span class="pln"> </span><span class="typ">TransformsRequest</span></li><li class="L8"><span class="pun">{</span></li><li class="L9"><span class="pln">    </span><span class="com">/**</span></li><li class="L0"><span class="com">     * Handle an incoming request.</span></li><li class="L1"><span class="com">     *</span></li><li class="L2"><span class="com">     * @param  \Illuminate\Http\Request  $request</span></li><li class="L3"><span class="com">     * @param  \Closure  $next</span></li><li class="L4"><span class="com">     * @return mixed</span></li><li class="L5"><span class="com">     */</span></li><li class="L6"><span class="pln">    </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> handle</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Closure</span><span class="pln"> $next</span><span class="pun">)</span></li><li class="L7"><span class="pln">    </span><span class="pun">{</span></li><li class="L8"><span class="pln">        $this</span><span class="pun">-&gt;</span><span class="pln">clean</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">);</span></li><li class="L9 current"><span class="pln"> </span></li><li class="L0 current active"><span class="pln">        </span><span class="kwd">return</span><span class="pln"> $next</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">);</span></li><li class="L1 current"><span class="pln">    </span><span class="pun">}</span></li><li class="L2"><span class="pln"> </span></li><li class="L3"><span class="pln">    </span><span class="com">/**</span></li><li class="L4"><span class="com">     * Clean the request's data.</span></li><li class="L5"><span class="com">     *</span></li><li class="L6"><span class="com">     * @param  \Illuminate\Http\Request  $request</span></li><li class="L7"><span class="com">     * @return void</span></li><li class="L8"><span class="com">     */</span></li><li class="L9"><span class="pln">    </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> clean</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">)</span></li><li class="L0"><span class="pln">    </span><span class="pun">{</span></li><li class="L1"><span class="pln">        $this</span><span class="pun">-&gt;</span><span class="pln">cleanParameterBag</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">-&gt;</span><span class="pln">query</span><span class="pun">);</span></li><li class="L2"><span class="pln"> </span></li><li class="L3"><span class="pln">        </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$request</span><span class="pun">-&gt;</span><span class="pln">isJson</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span></li><li class="L4"><span class="pln">            $this</span><span class="pun">-&gt;</span><span class="pln">cleanParameterBag</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">-&gt;</span><span class="pln">json</span><span class="pun">());</span></li><li class="L5"><span class="pln">        </span><span class="pun">}</span><span class="pln"> elseif </span><span class="pun">(</span><span class="pln">$request</span><span class="pun">-&gt;</span><span class="pln">request </span><span class="pun">!==</span><span class="pln"> $request</span><span class="pun">-&gt;</span><span class="pln">query</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L6"><span class="pln">            $this</span><span class="pun">-&gt;</span><span class="pln">cleanParameterBag</span><span class="pun">(</span><span class="pln">$request</span><span class="pun">-&gt;</span><span class="pln">request</span><span class="pun">);</span></li><li class="L7"><span class="pln">        </span><span class="pun">}</span></li><li class="L8"><span class="pln">    </span><span class="pun">}</span></li><li class="L9"><span class="pln"> </span></li><li class="L0"><span class="pln">    </span><span class="com">/**</span></li></ol></pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-19" class="code-block frame-args prettyprint">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1172098520" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1172098520")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-20">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-20" class="code-block linenums:152">                        // the appropriate method and arguments, returning the results back out.
                        return $pipe($passable, $stack);
                    } elseif (! is_object($pipe)) {
                        [$name, $parameters] = $this-&gt;parsePipeString($pipe);

                        // If the pipe is a string we will parse the string and resolve the class out
                        // of the dependency injection container. We can then build a callable and
                        // execute the pipe function giving in the parameters that are required.
                        $pipe = $this-&gt;getContainer()-&gt;make($name);

                        $parameters = array_merge([$passable, $stack], $parameters);
                    } else {
                        // If the pipe is already an object we'll just make a callable and pass it to
                        // the pipe as-is. There is no need to do any extra parsing and formatting
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                                    ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Exception $e) {
                    return $this-&gt;handleException($passable, $e);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, new FatalThrowableError($e));
                }
            };
        };
    }

    /**
     * Parse full pipe string to get name and parameters.
     *
     * @param  string  $pipe
     * @return array
     */
    protected function parsePipeString($pipe)
    {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-20" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-265360298" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-265360298")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-433545342" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($passable)</span> {<a class="sf-dump-ref">#132</a> …4}
</pre><script>Sfdump("sf-dump-433545342")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-21">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php</span></strong>
                </div>
                <pre id="frame-code-linenums-21" class="code-block linenums:8">class ValidatePostSize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Illuminate\Http\Exceptions\PostTooLargeException
     */
    public function handle($request, Closure $next)
    {
        $max = $this-&gt;getPostMaxSize();

        if ($max &gt; 0 &amp;&amp; $request-&gt;server('CONTENT_LENGTH') &gt; $max) {
            throw new PostTooLargeException;
        }

        return $next($request);
    }

    /**
     * Determine the server 'post_max_size' as bytes.
     *
     * @return int
     */
    protected function getPostMaxSize()
    {
        if (is_numeric($postMaxSize = ini_get('post_max_size'))) {
            return (int) $postMaxSize;
        }

        $metric = strtoupper(substr($postMaxSize, -1));
        $postMaxSize = (int) $postMaxSize;

        switch ($metric) {
            case 'K':
                return $postMaxSize * 1024;
            case 'M':</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-21" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1778309746" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1778309746")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-22">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-22" class="code-block linenums:152">                        // the appropriate method and arguments, returning the results back out.
                        return $pipe($passable, $stack);
                    } elseif (! is_object($pipe)) {
                        [$name, $parameters] = $this-&gt;parsePipeString($pipe);

                        // If the pipe is a string we will parse the string and resolve the class out
                        // of the dependency injection container. We can then build a callable and
                        // execute the pipe function giving in the parameters that are required.
                        $pipe = $this-&gt;getContainer()-&gt;make($name);

                        $parameters = array_merge([$passable, $stack], $parameters);
                    } else {
                        // If the pipe is already an object we'll just make a callable and pass it to
                        // the pipe as-is. There is no need to do any extra parsing and formatting
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                                    ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Exception $e) {
                    return $this-&gt;handleException($passable, $e);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, new FatalThrowableError($e));
                }
            };
        };
    }

    /**
     * Parse full pipe string to get name and parameters.
     *
     * @param  string  $pipe
     * @return array
     */
    protected function parsePipeString($pipe)
    {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-22" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1985994759" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1985994759")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-1613823625" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($passable)</span> {<a class="sf-dump-ref">#137</a> …4}
</pre><script>Sfdump("sf-dump-1613823625")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-23">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode.php</span></strong>
                </div>
                <pre id="frame-code-linenums-23" class="code-block linenums:44">     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Illuminate\Foundation\Http\Exceptions\MaintenanceModeException
     */
    public function handle($request, Closure $next)
    {
        if ($this-&gt;app-&gt;isDownForMaintenance()) {
            $data = json_decode(file_get_contents($this-&gt;app-&gt;storagePath().'/framework/down'), true);

            if (isset($data['allowed']) &amp;&amp; IpUtils::checkIp($request-&gt;ip(), (array) $data['allowed'])) {
                return $next($request);
            }

            if ($this-&gt;inExceptArray($request)) {
                return $next($request);
            }

            throw new MaintenanceModeException($data['time'], $data['retry'], $data['message']);
        }

        return $next($request);
    }

    /**
     * Determine if the request has a URI that should be accessible in maintenance mode.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function inExceptArray($request)
    {
        foreach ($this-&gt;except as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }

            if ($request-&gt;fullUrlIs($except) || $request-&gt;is($except)) {
                return true;
            }
        }
 </pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-23" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-171021697" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-171021697")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-24">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-24" class="code-block linenums:152">                        // the appropriate method and arguments, returning the results back out.
                        return $pipe($passable, $stack);
                    } elseif (! is_object($pipe)) {
                        [$name, $parameters] = $this-&gt;parsePipeString($pipe);

                        // If the pipe is a string we will parse the string and resolve the class out
                        // of the dependency injection container. We can then build a callable and
                        // execute the pipe function giving in the parameters that are required.
                        $pipe = $this-&gt;getContainer()-&gt;make($name);

                        $parameters = array_merge([$passable, $stack], $parameters);
                    } else {
                        // If the pipe is already an object we'll just make a callable and pass it to
                        // the pipe as-is. There is no need to do any extra parsing and formatting
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                                    ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Exception $e) {
                    return $this-&gt;handleException($passable, $e);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, new FatalThrowableError($e));
                }
            };
        };
    }

    /**
     * Parse full pipe string to get name and parameters.
     *
     * @param  string  $pipe
     * @return array
     */
    protected function parsePipeString($pipe)
    {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-24" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1126382691" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1126382691")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-966478324" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($passable)</span> {<a class="sf-dump-ref">#138</a> …4}
</pre><script>Sfdump("sf-dump-966478324")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-25">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\fideloper\proxy\src\TrustProxies.php</span></strong>
                </div>
                <pre id="frame-code-linenums-25" class="code-block linenums:38">    {
        $this-&gt;config = $config;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request::setTrustedProxies([], $this-&gt;getTrustedHeaderNames()); // Reset trusted proxies between requests
        $this-&gt;setTrustedProxyIpAddresses($request);

        return $next($request);
    }

    /**
     * Sets the trusted proxies on the request to the value of trustedproxy.proxies
     *
     * @param \Illuminate\Http\Request $request
     */
    protected function setTrustedProxyIpAddresses(Request $request)
    {
        $trustedIps = $this-&gt;proxies ?: $this-&gt;config-&gt;get('trustedproxy.proxies');

        // Trust any IP address that calls us
        // `**` for backwards compatibility, but is deprecated
        if ($trustedIps === '*' || $trustedIps === '**') {
            return $this-&gt;setTrustedProxyIpAddressesToTheCallingIp($request);
        }

        // Support IPs addresses separated by comma
        $trustedIps = is_string($trustedIps) ? array_map('trim', explode(',', $trustedIps)) : $trustedIps;
 </pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-25" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1256310968" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1256310968")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-26">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-26" class="code-block linenums:152">                        // the appropriate method and arguments, returning the results back out.
                        return $pipe($passable, $stack);
                    } elseif (! is_object($pipe)) {
                        [$name, $parameters] = $this-&gt;parsePipeString($pipe);

                        // If the pipe is a string we will parse the string and resolve the class out
                        // of the dependency injection container. We can then build a callable and
                        // execute the pipe function giving in the parameters that are required.
                        $pipe = $this-&gt;getContainer()-&gt;make($name);

                        $parameters = array_merge([$passable, $stack], $parameters);
                    } else {
                        // If the pipe is already an object we'll just make a callable and pass it to
                        // the pipe as-is. There is no need to do any extra parsing and formatting
                        // since the object we're given was already a fully instantiated object.
                        $parameters = [$passable, $stack];
                    }

                    $carry = method_exists($pipe, $this-&gt;method)
                                    ? $pipe-&gt;{$this-&gt;method}(...$parameters)
                                    : $pipe(...$parameters);

                    return $this-&gt;handleCarry($carry);
                } catch (Exception $e) {
                    return $this-&gt;handleException($passable, $e);
                } catch (Throwable $e) {
                    return $this-&gt;handleException($passable, new FatalThrowableError($e));
                }
            };
        };
    }

    /**
     * Parse full pipe string to get name and parameters.
     *
     * @param  string  $pipe
     * @return array
     */
    protected function parsePipeString($pipe)
    {</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-26" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-228148936" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-228148936")</script>
                        </li><li><pre class="sf-dump" id="sf-dump-195113465" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($passable)</span> {<a class="sf-dump-ref">#139</a> …4}
</pre><script>Sfdump("sf-dump-195113465")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-27">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php</span></strong>
                </div>
                <pre id="frame-code-linenums-27" class="code-block linenums:86">    public function via($method)
    {
        $this-&gt;method = $method;

        return $this;
    }

    /**
     * Run the pipeline with a final destination callback.
     *
     * @param  \Closure  $destination
     * @return mixed
     */
    public function then(Closure $destination)
    {
        $pipeline = array_reduce(
            array_reverse($this-&gt;pipes()), $this-&gt;carry(), $this-&gt;prepareDestination($destination)
        );

        return $pipeline($this-&gt;passable);
    }

    /**
     * Run the pipeline and return the result.
     *
     * @return mixed
     */
    public function thenReturn()
    {
        return $this-&gt;then(function ($passable) {
            return $passable;
        });
    }

    /**
     * Get the final piece of the Closure onion.
     *
     * @param  \Closure  $destination
     * @return \Closure
     */</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-27" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-947587832" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-947587832")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-28">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span></strong>
                </div>
                <pre id="frame-code-linenums-28" class="code-block linenums:126">    }

    /**
     * Send the given request through the middleware / router.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendRequestThroughRouter($request)
    {
        $this-&gt;app-&gt;instance('request', $request);

        Facade::clearResolvedInstance('request');

        $this-&gt;bootstrap();

        return (new Pipeline($this-&gt;app))
                    -&gt;send($request)
                    -&gt;through($this-&gt;app-&gt;shouldSkipMiddleware() ? [] : $this-&gt;middleware)
                    -&gt;then($this-&gt;dispatchToRouter());
    }

    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap()
    {
        if (! $this-&gt;app-&gt;hasBeenBootstrapped()) {
            $this-&gt;app-&gt;bootstrapWith($this-&gt;bootstrappers());
        }
    }

    /**
     * Get the route dispatcher callback.
     *
     * @return \Closure
     */
    protected function dispatchToRouter()</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-28" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-753254877" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Closure($request)</span> {<a class="sf-dump-ref">#30</a> …4}
</pre><script>Sfdump("sf-dump-753254877")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-29">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php</span></strong>
                </div>
                <pre id="frame-code-linenums-29" class="code-block linenums:91">    public function __construct(Application $app, Router $router)
    {
        $this-&gt;app = $app;
        $this-&gt;router = $router;

        $this-&gt;syncMiddlewareToRouter();
    }

    /**
     * Handle an incoming HTTP request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handle($request)
    {
        try {
            $request-&gt;enableHttpMethodParameterOverride();

            $response = $this-&gt;sendRequestThroughRouter($request);
        } catch (Exception $e) {
            $this-&gt;reportException($e);

            $response = $this-&gt;renderException($request, $e);
        } catch (Throwable $e) {
            $this-&gt;reportException($e = new FatalThrowableError($e));

            $response = $this-&gt;renderException($request, $e);
        }

        $this-&gt;app['events']-&gt;dispatch(
            new RequestHandled($request, $response)
        );

        return $response;
    }

    /**
     * Send the given request through the middleware / router.
     *</pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-29" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-479593457" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-479593457")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-30">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\public\index.php</span></strong>
                </div>
                <pre id="frame-code-linenums-30" class="code-block linenums:36">*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app-&gt;make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel-&gt;handle(
    $request = Illuminate\Http\Request::capture()
);

$response-&gt;send();

$kernel-&gt;terminate($request, $response);
 </pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-30" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-1460200532" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">Illuminate\Http\Request</span> {<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children">#52 <span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  #<span class="sf-dump-protected" title="Protected property">json</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">convertedFiles</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">userResolver</span>: <span class="sf-dump-note">Closure($guard = null)</span> {<a class="sf-dump-ref">#31</a> …4}
  #<span class="sf-dump-protected" title="Protected property">routeResolver</span>: <span class="sf-dump-note">Closure()</span> {<a class="sf-dump-ref">#148</a> …4}
  +<span class="sf-dump-public" title="Public property">attributes</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#54</a>}
  +<span class="sf-dump-public" title="Public property">request</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#53</a>}
  +<span class="sf-dump-public" title="Public property">query</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#60</a>}
  +<span class="sf-dump-public" title="Public property">server</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ServerBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ServerBag</span> {<a class="sf-dump-ref">#57</a>}
  +<span class="sf-dump-public" title="Public property">files</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\FileBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>FileBag</span> {<a class="sf-dump-ref">#56</a>}
  +<span class="sf-dump-public" title="Public property">cookies</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\ParameterBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>ParameterBag</span> {<a class="sf-dump-ref">#55</a>}
  +<span class="sf-dump-public" title="Public property">headers</span>: <span class="sf-dump-note" title="Symfony\Component\HttpFoundation\HeaderBag
"><span class="sf-dump-ellipsis sf-dump-ellipsis-note">Symfony\Component\HttpFoundation</span><span class="sf-dump-ellipsis sf-dump-ellipsis-note">\</span>HeaderBag</span> {<a class="sf-dump-ref">#58</a>}
  #<span class="sf-dump-protected" title="Protected property">content</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">languages</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">charsets</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">encodings</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">acceptableContentTypes</span>: <span class="sf-dump-note">array:7</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
    <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">text/html</span>"
    <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str" title="21 characters">application/xhtml+xml</span>"
    <span class="sf-dump-index">2</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/webp</span>"
    <span class="sf-dump-index">3</span> =&gt; "<span class="sf-dump-str" title="10 characters">image/apng</span>"
    <span class="sf-dump-index">4</span> =&gt; "<span class="sf-dump-str" title="15 characters">application/xml</span>"
    <span class="sf-dump-index">5</span> =&gt; "<span class="sf-dump-str" title="27 characters">application/signed-exchange</span>"
    <span class="sf-dump-index">6</span> =&gt; "<span class="sf-dump-str" title="3 characters">*/*</span>"
  </samp>]
  #<span class="sf-dump-protected" title="Protected property">pathInfo</span>: "<span class="sf-dump-str" title="7 characters">/upload</span>"
  #<span class="sf-dump-protected" title="Protected property">requestUri</span>: "<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
  #<span class="sf-dump-protected" title="Protected property">baseUrl</span>: ""
  #<span class="sf-dump-protected" title="Protected property">basePath</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">method</span>: "<span class="sf-dump-str" title="4 characters">POST</span>"
  #<span class="sf-dump-protected" title="Protected property">format</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">session</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">locale</span>: <span class="sf-dump-const">null</span>
  #<span class="sf-dump-protected" title="Protected property">defaultLocale</span>: "<span class="sf-dump-str" title="2 characters">en</span>"
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">preferredFormat</span>: <span class="sf-dump-const">null</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isHostValid</span>: <span class="sf-dump-const">true</span>
  -<span class="sf-dump-private" title="Private property defined in class:
`Symfony\Component\HttpFoundation\Request`">isForwardedValid</span>: <span class="sf-dump-const">true</span>
  <span class="sf-dump-meta">basePath</span>: ""
  <span class="sf-dump-meta">format</span>: "<span class="sf-dump-str" title="4 characters">html</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1460200532")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
            <div class="frame-code " id="frame-code-31">
                <div class="frame-file">
                    <strong><span class="delimiter">C:\Users\AHMAD SHOJAAT\Desktop\project\project\server.php</span></strong>
                </div>
                <pre id="frame-code-linenums-31" class="code-block linenums:2">
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell &lt;taylor@laravel.com&gt;
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' &amp;&amp; file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
 </pre>


                <div class="frame-file">
                    Arguments
                </div>
                <div id="frame-code-args-31" class="code-block frame-args">
                    <ol class="linenums"><li><pre class="sf-dump" id="sf-dump-2130032369" data-indent-pad="  ">"<span class="sf-dump-str" title="63 characters">C:\Users\AHMAD SHOJAAT\Desktop\project\project\public\index.php</span>"
</pre><script>Sfdump("sf-dump-2130032369")</script>
                        </li></ol>          </div>

                <div class="frame-comments empty">
                </div>

            </div>
        </div>
        <div class="details">
            <h2 class="details-heading">Environment &amp; details:</h2>

            <div class="data-table-container" id="data-tables">
                <div class="data-table" id="sg-get-data">
                    <label>GET Data</label>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td>_token</td>
                            <td><pre class="sf-dump" id="sf-dump-1754854461" data-indent-pad="  ">"<span class="sf-dump-str" title="40 characters">Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ</span>"
</pre><script>Sfdump("sf-dump-1754854461")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>CKEditor</td>
                            <td><pre class="sf-dump" id="sf-dump-1359020110" data-indent-pad="  ">"<span class="sf-dump-str" title="6 characters">editor</span>"
</pre><script>Sfdump("sf-dump-1359020110")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>CKEditorFuncNum</td>
                            <td><pre class="sf-dump" id="sf-dump-1842254457" data-indent-pad="  ">"<span class="sf-dump-str">1</span>"
</pre><script>Sfdump("sf-dump-1842254457")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>langCode</td>
                            <td><pre class="sf-dump" id="sf-dump-1434370728" data-indent-pad="  ">"<span class="sf-dump-str" title="2 characters">en</span>"
</pre><script>Sfdump("sf-dump-1434370728")</script>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="data-table" id="sg-post-data">
                    <label>POST Data</label>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td>ckCsrfToken</td>
                            <td><pre class="sf-dump" id="sf-dump-531647491" data-indent-pad="  ">"<span class="sf-dump-str" title="40 characters">oS24bb7mcFvpm3XCdpNKeP515rq32JRPZE9XnSyz</span>"
</pre><script>Sfdump("sf-dump-531647491")</script>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="data-table" id="sg-files">
                    <label>Files</label>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td>upload</td>
                            <td><pre class="sf-dump" id="sf-dump-2068173411" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:5</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="1" class="sf-dump-compact">
  "<span class="sf-dump-key">name</span>" =&gt; "<span class="sf-dump-str" title="12 characters">download.jpg</span>"
  "<span class="sf-dump-key">type</span>" =&gt; "<span class="sf-dump-str" title="10 characters">image/jpeg</span>"
  "<span class="sf-dump-key">tmp_name</span>" =&gt; "<span class="sf-dump-str" title="23 characters">D:\xampp\tmp\php25D.tmp</span>"
  "<span class="sf-dump-key">error</span>" =&gt; <span class="sf-dump-num">0</span>
  "<span class="sf-dump-key">size</span>" =&gt; <span class="sf-dump-num">20659</span>
</samp>]
</pre><script>Sfdump("sf-dump-2068173411")</script>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="data-table" id="sg-cookies">
                    <label>Cookies</label>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td>XSRF-TOKEN</td>
                            <td><pre class="sf-dump" id="sf-dump-2092274816" data-indent-pad="  ">"<span class="sf-dump-str sf-dump-str-collapse" title="244 characters"><span class="sf-dump-str-collapse">eyJpdiI6Im1ZTDhaV1djUXpzOExydGd1OVhFYWc9PSIsInZhbHVlIjoiNUpGdEdycjU2cmc0TkxnZkNnOFwvcW16eDF4UE9vWk9cL3VPTmR2czNHMFMzR092blRqWHJJb0dqV0dLdDRQbnZPIiwibWFjIjoiNDg4YmIzNTdlODFlNjYyMjA4M2ViNWRkOThhYmYzOGQ3Yzg0YjQ1MGI0M2U1MzUxZmEyZjU2Y2I4NTNiMzhjMiJ9<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">eyJpdiI6Im1ZTDhaV1djUXpzOExydGd1OVhFYWc9PSIsInZhbHVlIjoiNUpGdEdycjU2cmc0TkxnZkNnOFwvcW16eDF4UE9vWk9cL3VPTmR2czNHMFMzR092blRqWHJJb0dqV0dLdDRQbnZPIiwibWFjIjoiNDg4<a class="sf-dump-ref sf-dump-str-toggle" title="84 remaining characters"> ▶</a></span></span>"
</pre><script>Sfdump("sf-dump-2092274816")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>laravel_session</td>
                            <td><pre class="sf-dump" id="sf-dump-561449941" data-indent-pad="  ">"<span class="sf-dump-str sf-dump-str-collapse" title="244 characters"><span class="sf-dump-str-collapse">eyJpdiI6ImI0MmQxTEI2aWcyKzc3NkpmM21YOFE9PSIsInZhbHVlIjoiTDRIQ1l6aVJcL3hVV3ZVUm1YQVQ5KzhVNDFqRnE3KzIwc1wvZEtuWjNmR3UrRkl5SjdUSm9Lc2dmaTVLN0g1V1lEIiwibWFjIjoiMmQxZWFkMzI1ODFlODMzNTEyMDcxOGU0MTI5MjgzYWM4Zjg5ZmMxZTcyYTM5ZGI0NDdlNGM3ZjRhZDc5ZmFlNCJ9<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">eyJpdiI6ImI0MmQxTEI2aWcyKzc3NkpmM21YOFE9PSIsInZhbHVlIjoiTDRIQ1l6aVJcL3hVV3ZVUm1YQVQ5KzhVNDFqRnE3KzIwc1wvZEtuWjNmR3UrRkl5SjdUSm9Lc2dmaTVLN0g1V1lEIiwibWFjIjoiMmQx<a class="sf-dump-ref sf-dump-str-toggle" title="84 remaining characters"> ▶</a></span></span>"
</pre><script>Sfdump("sf-dump-561449941")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>ckCsrfToken</td>
                            <td><pre class="sf-dump" id="sf-dump-1057796130" data-indent-pad="  ">"<span class="sf-dump-str" title="40 characters">oS24bb7mcFvpm3XCdpNKeP515rq32JRPZE9XnSyz</span>"
</pre><script>Sfdump("sf-dump-1057796130")</script>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="data-table" id="sg-session">
                    <label class="empty">Session</label>
                    <span class="empty">empty</span>
                </div>
                <div class="data-table" id="sg-serverrequest-data">
                    <label>Server/Request Data</label>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td>DOCUMENT_ROOT</td>
                            <td><pre class="sf-dump" id="sf-dump-1398919283" data-indent-pad="  ">"<span class="sf-dump-str" title="53 characters">C:\Users\AHMAD SHOJAAT\Desktop\project\project\public</span>"
</pre><script>Sfdump("sf-dump-1398919283")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REMOTE_ADDR</td>
                            <td><pre class="sf-dump" id="sf-dump-284662676" data-indent-pad="  ">"<span class="sf-dump-str" title="9 characters">127.0.0.1</span>"
</pre><script>Sfdump("sf-dump-284662676")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REMOTE_PORT</td>
                            <td><pre class="sf-dump" id="sf-dump-1331945544" data-indent-pad="  ">"<span class="sf-dump-str" title="5 characters">10161</span>"
</pre><script>Sfdump("sf-dump-1331945544")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SERVER_SOFTWARE</td>
                            <td><pre class="sf-dump" id="sf-dump-1173271529" data-indent-pad="  ">"<span class="sf-dump-str" title="29 characters">PHP 7.2.10 Development Server</span>"
</pre><script>Sfdump("sf-dump-1173271529")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SERVER_PROTOCOL</td>
                            <td><pre class="sf-dump" id="sf-dump-624367798" data-indent-pad="  ">"<span class="sf-dump-str" title="8 characters">HTTP/1.1</span>"
</pre><script>Sfdump("sf-dump-624367798")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SERVER_NAME</td>
                            <td><pre class="sf-dump" id="sf-dump-2049829773" data-indent-pad="  ">"<span class="sf-dump-str" title="9 characters">127.0.0.1</span>"
</pre><script>Sfdump("sf-dump-2049829773")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SERVER_PORT</td>
                            <td><pre class="sf-dump" id="sf-dump-966749863" data-indent-pad="  ">"<span class="sf-dump-str" title="4 characters">8000</span>"
</pre><script>Sfdump("sf-dump-966749863")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REQUEST_URI</td>
                            <td><pre class="sf-dump" id="sf-dump-1434160518" data-indent-pad="  ">"<span class="sf-dump-str" title="101 characters">/upload?_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
</pre><script>Sfdump("sf-dump-1434160518")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REQUEST_METHOD</td>
                            <td><pre class="sf-dump" id="sf-dump-659638284" data-indent-pad="  ">"<span class="sf-dump-str" title="4 characters">POST</span>"
</pre><script>Sfdump("sf-dump-659638284")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SCRIPT_NAME</td>
                            <td><pre class="sf-dump" id="sf-dump-1682519533" data-indent-pad="  ">"<span class="sf-dump-str" title="10 characters">/index.php</span>"
</pre><script>Sfdump("sf-dump-1682519533")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>SCRIPT_FILENAME</td>
                            <td><pre class="sf-dump" id="sf-dump-1844117031" data-indent-pad="  ">"<span class="sf-dump-str" title="63 characters">C:\Users\AHMAD SHOJAAT\Desktop\project\project\public\index.php</span>"
</pre><script>Sfdump("sf-dump-1844117031")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>PATH_INFO</td>
                            <td><pre class="sf-dump" id="sf-dump-1545566818" data-indent-pad="  ">"<span class="sf-dump-str" title="7 characters">/upload</span>"
</pre><script>Sfdump("sf-dump-1545566818")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>PHP_SELF</td>
                            <td><pre class="sf-dump" id="sf-dump-1505169066" data-indent-pad="  ">"<span class="sf-dump-str" title="17 characters">/index.php/upload</span>"
</pre><script>Sfdump("sf-dump-1505169066")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>QUERY_STRING</td>
                            <td><pre class="sf-dump" id="sf-dump-453367189" data-indent-pad="  ">"<span class="sf-dump-str" title="93 characters">_token=Ynj3ELxhNb6hrk7o6A9eohea2VcpeMT4PJ6TMGEJ&amp;CKEditor=editor&amp;CKEditorFuncNum=1&amp;langCode=en</span>"
</pre><script>Sfdump("sf-dump-453367189")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_HOST</td>
                            <td><pre class="sf-dump" id="sf-dump-1451836493" data-indent-pad="  ">"<span class="sf-dump-str" title="14 characters">127.0.0.1:8000</span>"
</pre><script>Sfdump("sf-dump-1451836493")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_CONNECTION</td>
                            <td><pre class="sf-dump" id="sf-dump-1629947298" data-indent-pad="  ">"<span class="sf-dump-str" title="10 characters">keep-alive</span>"
</pre><script>Sfdump("sf-dump-1629947298")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>CONTENT_LENGTH</td>
                            <td><pre class="sf-dump" id="sf-dump-1888867556" data-indent-pad="  ">"<span class="sf-dump-str" title="5 characters">20985</span>"
</pre><script>Sfdump("sf-dump-1888867556")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_CONTENT_LENGTH</td>
                            <td><pre class="sf-dump" id="sf-dump-852689334" data-indent-pad="  ">"<span class="sf-dump-str" title="5 characters">20985</span>"
</pre><script>Sfdump("sf-dump-852689334")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_CACHE_CONTROL</td>
                            <td><pre class="sf-dump" id="sf-dump-279646634" data-indent-pad="  ">"<span class="sf-dump-str" title="9 characters">max-age=0</span>"
</pre><script>Sfdump("sf-dump-279646634")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_UPGRADE_INSECURE_REQUESTS</td>
                            <td><pre class="sf-dump" id="sf-dump-1281737959" data-indent-pad="  ">"<span class="sf-dump-str">1</span>"
</pre><script>Sfdump("sf-dump-1281737959")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_ORIGIN</td>
                            <td><pre class="sf-dump" id="sf-dump-1385748586" data-indent-pad="  ">"<span class="sf-dump-str" title="21 characters">http://127.0.0.1:8000</span>"
</pre><script>Sfdump("sf-dump-1385748586")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>CONTENT_TYPE</td>
                            <td><pre class="sf-dump" id="sf-dump-1754315881" data-indent-pad="  ">"<span class="sf-dump-str" title="68 characters">multipart/form-data; boundary=----WebKitFormBoundaryQ2eBgHEj9mWc52XW</span>"
</pre><script>Sfdump("sf-dump-1754315881")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_CONTENT_TYPE</td>
                            <td><pre class="sf-dump" id="sf-dump-1099665874" data-indent-pad="  ">"<span class="sf-dump-str" title="68 characters">multipart/form-data; boundary=----WebKitFormBoundaryQ2eBgHEj9mWc52XW</span>"
</pre><script>Sfdump("sf-dump-1099665874")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_USER_AGENT</td>
                            <td><pre class="sf-dump" id="sf-dump-1579040617" data-indent-pad="  ">"<span class="sf-dump-str" title="155 characters">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 OPR/68.0.3618.104 (Edition Campaign 34)</span>"
</pre><script>Sfdump("sf-dump-1579040617")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_ACCEPT</td>
                            <td><pre class="sf-dump" id="sf-dump-1429606758" data-indent-pad="  ">"<span class="sf-dump-str" title="124 characters">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</span>"
</pre><script>Sfdump("sf-dump-1429606758")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_SEC_FETCH_SITE</td>
                            <td><pre class="sf-dump" id="sf-dump-218594536" data-indent-pad="  ">"<span class="sf-dump-str" title="11 characters">same-origin</span>"
</pre><script>Sfdump("sf-dump-218594536")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_SEC_FETCH_MODE</td>
                            <td><pre class="sf-dump" id="sf-dump-273155916" data-indent-pad="  ">"<span class="sf-dump-str" title="8 characters">navigate</span>"
</pre><script>Sfdump("sf-dump-273155916")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_SEC_FETCH_USER</td>
                            <td><pre class="sf-dump" id="sf-dump-1463254142" data-indent-pad="  ">"<span class="sf-dump-str" title="2 characters">?1</span>"
</pre><script>Sfdump("sf-dump-1463254142")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_SEC_FETCH_DEST</td>
                            <td><pre class="sf-dump" id="sf-dump-1704187851" data-indent-pad="  ">"<span class="sf-dump-str" title="6 characters">iframe</span>"
</pre><script>Sfdump("sf-dump-1704187851")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_REFERER</td>
                            <td><pre class="sf-dump" id="sf-dump-567862375" data-indent-pad="  ">"<span class="sf-dump-str" title="22 characters">http://127.0.0.1:8000/</span>"
</pre><script>Sfdump("sf-dump-567862375")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_ACCEPT_ENCODING</td>
                            <td><pre class="sf-dump" id="sf-dump-297157083" data-indent-pad="  ">"<span class="sf-dump-str" title="17 characters">gzip, deflate, br</span>"
</pre><script>Sfdump("sf-dump-297157083")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_ACCEPT_LANGUAGE</td>
                            <td><pre class="sf-dump" id="sf-dump-1810533871" data-indent-pad="  ">"<span class="sf-dump-str" title="14 characters">en-US,en;q=0.9</span>"
</pre><script>Sfdump("sf-dump-1810533871")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>HTTP_COOKIE</td>
                            <td><pre class="sf-dump" id="sf-dump-597193999" data-indent-pad="  ">"<span class="sf-dump-str sf-dump-str-collapse" title="571 characters"><span class="sf-dump-str-collapse">XSRF-TOKEN=eyJpdiI6Im1ZTDhaV1djUXpzOExydGd1OVhFYWc9PSIsInZhbHVlIjoiNUpGdEdycjU2cmc0TkxnZkNnOFwvcW16eDF4UE9vWk9cL3VPTmR2czNHMFMzR092blRqWHJJb0dqV0dLdDRQbnZPIiwibWFjIjoiNDg4YmIzNTdlODFlNjYyMjA4M2ViNWRkOThhYmYzOGQ3Yzg0YjQ1MGI0M2U1MzUxZmEyZjU2Y2I4NTNiMzhjMiJ9; laravel_session=eyJpdiI6ImI0MmQxTEI2aWcyKzc3NkpmM21YOFE9PSIsInZhbHVlIjoiTDRIQ1l6aVJcL3hVV3ZVUm1YQVQ5KzhVNDFqRnE3KzIwc1wvZEtuWjNmR3UrRkl5SjdUSm9Lc2dmaTVLN0g1V1lEIiwibWFjIjoiMmQxZWFkMzI1ODFlODMzNTEyMDcxOGU0MTI5MjgzYWM4Zjg5ZmMxZTcyYTM5ZGI0NDdlNGM3ZjRhZDc5ZmFlNCJ9; ckCsrfToken=oS24bb7mcFvpm3XCdpNKeP515rq32JRPZE9XnSyz<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">XSRF-TOKEN=eyJpdiI6Im1ZTDhaV1djUXpzOExydGd1OVhFYWc9PSIsInZhbHVlIjoiNUpGdEdycjU2cmc0TkxnZkNnOFwvcW16eDF4UE9vWk9cL3VPTmR2czNHMFMzR092blRqWHJJb0dqV0dLdDRQbnZPIiwib<a class="sf-dump-ref sf-dump-str-toggle" title="411 remaining characters"> ▶</a></span></span>"
</pre><script>Sfdump("sf-dump-597193999")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REQUEST_TIME_FLOAT</td>
                            <td><pre class="sf-dump" id="sf-dump-1962797840" data-indent-pad="  "><span class="sf-dump-num">1593619546.847</span>
</pre><script>Sfdump("sf-dump-1962797840")</script>
                            </td>
                        </tr>
                        <tr>
                            <td>REQUEST_TIME</td>
                            <td><pre class="sf-dump" id="sf-dump-579808912" data-indent-pad="  "><span class="sf-dump-num">1593619546</span>
</pre><script>Sfdump("sf-dump-579808912")</script>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="data-table" id="sg-environment-variables">
                    <label class="empty">Environment Variables</label>
                    <span class="empty">empty</span>
                </div>
            </div>

            <div class="data-table-container" id="handlers">
                <label>Registered Handlers</label>
                <div class="handler active">
                    0. Whoops\Handler\PrettyPageHandler      </div>
            </div>

        </div>
    </div>
</div>
