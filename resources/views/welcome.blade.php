@extends('layouts.app')

@section('title', 'Inicio - Postgrado en Educación')
@section('description', 'Descubre nuestros programas de postgrado en educación. Maestrías, doctorados y especializaciones de excelencia académica.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-transparent via-blue-900/30 to-purple-900/40"></div>
    
    <div class="relative container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight">
                        Transforma la 
                        <span class="text-yellow-400">Educación</span>
                        del Futuro
                    </h1>
                    <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed">
                        Programas de postgrado de excelencia que forman líderes educativos comprometidos con la innovación y el cambio social.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/catalogo/educacion" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-yellow-300 transition duration-300 text-center shadow-lg">
                        Ver Catálogos
                    </a>
                    <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20programas%20de%20postgrado%20en%20educación" target="_blank" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-900 transition duration-300 text-center">
                        Solicitar Información
                    </a>
                </div>
                
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-400">15+</div>
                        <div class="text-sm text-blue-100">Años de experiencia</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-400">500+</div>
                        <div class="text-sm text-blue-100">Graduados exitosos</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-400">98%</div>
                        <div class="text-sm text-blue-100">Tasa de empleabilidad</div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-3xl transform rotate-3"></div>
                <div class="relative bg-white rounded-3xl p-1 transform -rotate-3 hover:rotate-0 transition-transform duration-500">
                    <img src="/banner/postgrado.jpg" alt="Estudiantes de postgrado" class="w-full h-96 object-cover rounded-3xl shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programas Destacados -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nuestros Programas</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ofrecemos programas innovadores diseñados para profesionales que buscan liderar el cambio en educación.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Educación -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <!-- Imagen del programa -->
                <div class="h-48 relative overflow-hidden">
                    <img src="/programas/educacion.jpg" alt="Programa de Educación" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Educación</h3>
                    <p class="text-gray-600 mb-6">
                        Programas especializados en pedagogía, didáctica, gestión educativa y liderazgo académico para transformar la educación.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="text-blue-700 font-medium">Cursos y diplomas</div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Modalidad presencial y virtual
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Certificación profesional
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Práctica supervisada
                            </li>
                        </ul>
                    </div>
                    <a href="/catalogo/educacion" class="inline-flex items-center justify-center w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300">
                        Ver Catálogo
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Enfermería -->
            <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <!-- Imagen del programa -->
                <div class="h-48 relative overflow-hidden">
                    <img src="/programas/enfermeria.jpg" alt="Programa de Enfermería" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Enfermería</h3>
                    <p class="text-gray-600 mb-6">
                        Programas de formación en cuidados especializados, administración sanitaria y práctica clínica avanzada.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="text-green-700 font-medium">Cursos y diplomas</div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Prácticas clínicas especializadas
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Convenios hospitalarios
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Acreditación internacional
                            </li>
                        </ul>
                    </div>
                    <button onclick="mostrarMensajeEnfermeria()" class="inline-flex items-center justify-center w-full bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-300">
                        Ver Catálogo
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Derecho -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-100 rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <!-- Imagen del programa -->
                <div class="h-48 relative overflow-hidden">
                    <img src="/programas/derecho.jpg" alt="Programa de Derecho" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Derecho</h3>
                    <p class="text-gray-600 mb-6">
                        Programas especializados en áreas jurídicas, derecho corporativo, penal, civil y derecho público.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="text-purple-700 font-medium">Cursos y diplomas</div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Práctica jurídica real
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Convenios con tribunales
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Actualización jurídica continua
                            </li>
                        </ul>
                    </div>
                    <button onclick="mostrarMensajeDerecho()" class="inline-flex items-center justify-center w-full bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-300">
                        Ver Catálogo
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cursos, Diplomados y Maestrías -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Modalidades de Estudio</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Descubre nuestras diferentes opciones académicas adaptadas a tus necesidades y horarios.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Cursos y Talleres -->
            <div class="bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-56 relative overflow-hidden">
                    <img src="/modalidad de estudios/curso y talleres.jpg" alt="Cursos y Talleres" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-2xl font-bold text-white mb-1">Cursos y Talleres</h3>
                        <p class="text-blue-200 text-sm">Formación continua</p>
                    </div>
                </div>
                
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Encontrarás una lista con cursos cortos y talleres y una diversa oferta de actividades académicas que ofrece la escuela de Educación, Enfermería y Derecho de la Facultad de Educación. Encontrarás cursos presenciales, semi-presenciales y virtuales.
                    </p>
                    
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span>Corta duración</span>
                    </div>
                </div>
            </div>

            <!-- Diplomados -->
            <div class="bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-56 relative overflow-hidden">
                    <img src="/modalidad de estudios/diplomados.jpg" alt="Diplomados" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-2xl font-bold text-white mb-1">Diplomados</h3>
                        <p class="text-green-200 text-sm">Especialización intermedia</p>
                    </div>
                </div>
                
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Ofrecemos una lista completa de todas las diplomaturas y programas que ofrece la escuela de Educación, Enfermería y Derecho de la Facultad de Educación. También podrás descargar el catálogo de diplomaturas en PDF.
                    </p>
                    
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 1a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                        </svg>
                        <span>Descargar PDF</span>
                    </div>
                </div>
            </div>

            <!-- Maestrías -->
            <div class="bg-white rounded-2xl overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-56 relative overflow-hidden">
                    <img src="/modalidad de estudios/Maestrias.jpg" alt="Maestrías" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <h3 class="text-2xl font-bold text-white mb-1">Maestrías</h3>
                        <p class="text-purple-200 text-sm">Estudios avanzados</p>
                    </div>
                </div>
                
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Ofrecemos doctorados y maestrías que abarcan diversas áreas profesionales y han sido desarrolladas en modalidad, presencial, semi-presencial y virtual.
                    </p>
                    
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                        </svg>
                        <span>Alto nivel académico</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aprende Diferente -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Contenido de texto -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                        Aprende 
                        <span class="text-blue-600">Diferente</span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">
                        Por eso, creemos en una enseñanza práctica e innovadora con nuestras aulas híbridas, diseñadas para una nueva experiencia de aprendizaje.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Además, nuestras maestrías incluyen acceso a muchos cursos de instituciones prestigiosas como Google, Microsoft, Capacita+, etc.
                    </p>
                </div>
                
                <!-- Logos de instituciones -->
                <div class="flex flex-wrap items-center gap-6 pt-6">
                    <div class="flex items-center space-x-2 bg-gray-50 px-4 py-2 rounded-lg">
                        <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">G</span>
                        </div>
                        <span class="font-medium text-gray-700">Google</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-gray-50 px-4 py-2 rounded-lg">
                        <div class="w-8 h-8 bg-green-600 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">M</span>
                        </div>
                        <span class="font-medium text-gray-700">Microsoft</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-gray-50 px-4 py-2 rounded-lg">
                        <div class="w-8 h-8 bg-orange-600 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">C+</span>
                        </div>
                        <span class="font-medium text-gray-700">Capacita+</span>
                    </div>
                </div>
                
            </div>
            
            <!-- Video de YouTube -->
            <div class="relative">
                <div class="relative bg-gray-900 rounded-2xl overflow-hidden shadow-2xl group">
                    <div class="h-[600px] lg:h-[800px]">
                        <iframe 
                            class="w-full h-full" 
                            src="https://drive.google.com/file/d/1iLHjfows_LjEcBcHvEiEyC20mBVYFRb9/preview" 
                            title="Aprende Diferente - Nuestra Metodología" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    
                    <!-- Overlay opcional para mostrar título -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h4 class="text-white font-semibold text-lg">Conoce nuestra metodología innovadora</h4>
                        <p class="text-gray-300 text-sm">Aulas híbridas y experiencias de aprendizaje únicas</p>
                    </div>
                </div>
                
                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-100 rounded-full opacity-60"></div>
                <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-100 rounded-full opacity-40"></div>
            </div>
        </div>
    </div>
</section>

<!-- Por qué elegir nuestro postgrado -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">¿Por qué elegirnos?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Nos distinguimos por nuestra excelencia académica, innovación pedagógica y compromiso con la transformación educativa.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Profesores Expertos</h3>
                <p class="text-gray-600">Docentes con amplia experiencia académica y profesional en el campo educativo.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Metodología Innovadora</h3>
                <p class="text-gray-600">Enfoques pedagógicos actualizados que combinan teoría y práctica educativa.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Acreditación Internacional</h3>
                <p class="text-gray-600">Programas reconocidos por organismos internacionales de educación superior.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Red de Egresados</h3>
                <p class="text-gray-600">Comunidad activa de graduados que lideran instituciones educativas.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">¿Listo para dar el siguiente paso?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Únete a nuestra comunidad de educadores comprometidos con la excelencia académica y la transformación social.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20iniciar%20el%20proceso%20de%20admisión%20para%20los%20programas%20de%20postgrado" target="_blank" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                    Iniciar Proceso de Admisión
                </a>
                <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20programas%20de%20postgrado%20en%20educación" target="_blank" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition duration-300">
                    Solicitar Información
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonio -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Lo que dicen nuestros egresados</h2>
            
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12">
                <div class="mb-8">
                    <svg class="w-12 h-12 text-blue-600 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="text-xl md:text-2xl text-gray-700 leading-relaxed italic">
                        "El programa de maestría transformó completamente mi perspectiva sobre la educación. Ahora lidero proyectos de innovación pedagógica en mi institución y he logrado impactar positivamente la vida de cientos de estudiantes."
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<script>
function mostrarMensajeEnfermeria() {
    alert('Programa de Enfermería próximamente disponible. Por favor, contáctanos para más información sobre nuestros programas actuales de Educación.');
}

function mostrarMensajeDerecho() {
    alert('Programa de Derecho próximamente disponible. Por favor, contáctanos para más información sobre nuestros programas actuales de Educación.');
}
</script>
@endsection