<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Barra superior con contacto - Solo en desktop -->
        <div class="hidden lg:flex justify-between items-center py-2 text-sm text-gray-600 border-b border-gray-200">
            <div class="flex space-x-6">
                <span class="flex items-center hover:text-blue-600 transition-colors">
                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    posgrado-educacion@unamad.edu.pe
                </span>
                <span class="flex items-center hover:text-blue-600 transition-colors">
                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd"/>
                    </svg>
                    +51 992 686 362
                </span>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-blue-600 transition-colors">Portal Estudiantes</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Biblioteca Digital</a>
            </div>
        </div>

        <!-- Navegación principal -->
        <nav class="flex items-center justify-between py-3 lg:py-4">
            <!-- Logo y texto -->
            <div class="flex items-center flex-shrink-0">
                <a href="/" class="flex items-center group">
                    <img src="/logo/logopostgrado.png" alt="Logo Postgrado en Educación" class="h-10 w-auto sm:h-12 lg:h-14 mr-3 transition-transform group-hover:scale-105">
                    <div class="hidden sm:block">
                        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-blue-800 leading-tight">Postgrado en Educación</h1>
                        <p class="text-xs sm:text-sm text-gray-600">Excelencia Académica</p>
                    </div>
                </a>
            </div>

            <!-- Menú de navegación desktop -->
            <ul class="hidden lg:flex items-center space-x-8 text-gray-700 font-medium">
                <li><a href="/" class="hover:text-blue-600 transition-colors py-2 {{ Request::is('/') ? 'text-blue-600 font-semibold' : '' }}">Inicio</a></li>
                <li class="relative group">
                    <button class="hover:text-blue-600 transition-colors flex items-center py-2">
                        Programas
                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="absolute left-0 top-full mt-1 w-64 bg-white shadow-xl rounded-lg border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="p-2">
                            <a href="/catalogo/educacion" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md transition-colors">
                                <div class="font-medium flex items-center">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                    Educación
                                </div>
                                <div class="text-sm text-gray-500">Cursos y diplomas</div>
                            </a>
                            <button onclick="mostrarMensajeEnfermeria()" class="block w-full text-left px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-md transition-colors">
                                <div class="font-medium flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    Enfermería
                                </div>
                                <div class="text-sm text-gray-500">Próximamente disponible</div>
                            </button>
                            <button onclick="mostrarMensajeDerecho()" class="block w-full text-left px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-md transition-colors">
                                <div class="font-medium flex items-center">
                                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                    Derecho
                                </div>
                                <div class="text-sm text-gray-500">Próximamente disponible</div>
                            </button>
                        </div>
                    </div>
                </li>
                <li><a href="http://aula.unamad.edu.pe/Account/Login?ReturnUrl=%2F" target="_blank" class="hover:text-blue-600 transition-colors py-2">Aula Virtual</a></li>
                <li><a href="/nosotros" class="hover:text-blue-600 transition-colors py-2">Nosotros</a></li>
                <li><a href="/contacto" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">Contacto</a></li>
            </ul>

            <!-- Botón móvil mejorado -->
            <div class="flex items-center lg:hidden">
                <button 
                    id="mobile-menu-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition-colors"
                    aria-expanded="false"
                    onclick="toggleMobileMenu()"
                >
                    <span class="sr-only">Abrir menú principal</span>
                    <svg id="menu-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Menú móvil mejorado -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200">
                <a href="/" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-medium transition-colors {{ Request::is('/') ? 'bg-blue-50 text-blue-600' : '' }}">Inicio</a>
                
                <!-- Programas expandible en móvil -->
                <div class="block">
                    <button onclick="toggleMobileProgramas()" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-medium transition-colors">
                        <span>Programas</span>
                        <svg id="mobile-programs-icon" class="h-5 w-5 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div id="mobile-programs-menu" class="hidden pl-6 space-y-1">
                        <a href="/catalogo/educacion" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md transition-colors flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            Educación
                        </a>
                        <button onclick="mostrarMensajeEnfermeria()" class="block w-full text-left px-3 py-2 text-sm text-gray-600 hover:bg-green-50 hover:text-green-600 rounded-md transition-colors flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            Enfermería - Próximamente
                        </button>
                        <button onclick="mostrarMensajeDerecho()" class="block w-full text-left px-3 py-2 text-sm text-gray-600 hover:bg-purple-50 hover:text-purple-600 rounded-md transition-colors flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                            Derecho - Próximamente
                        </button>
                    </div>
                </div>
                
                <a href="http://aula.unamad.edu.pe/Account/Login?ReturnUrl=%2F" target="_blank" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-medium transition-colors">Aula Virtual</a>
                <a href="/nosotros" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-50 hover:text-blue-600 font-medium transition-colors">Nosotros</a>
                <a href="/contacto" class="block px-3 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 font-medium transition-colors text-center">Contacto</a>
                
                <!-- Contacto en móvil -->
                <div class="pt-4 border-t border-gray-200 mt-4">
                    <div class="px-3 py-2">
                        <p class="text-sm text-gray-600 mb-2">Información de contacto:</p>
                        <p class="text-sm text-gray-700">posgrado-educacion@unamad.edu.pe</p>
                        <p class="text-sm text-gray-700">+51 992 686 362</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>