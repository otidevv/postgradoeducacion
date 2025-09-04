@extends('layouts.app')

@section('title', 'Nosotros - Postgrado en Educación')
@section('description', 'Conoce más sobre la Universidad Nacional Amazónica de Madre de Dios y nuestra misión de formar líderes educativos comprometidos con la transformación social.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 text-white py-16">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <div class="relative container mx-auto px-4">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6">
                <span class="text-yellow-400">Nosotros</span>
            </h1>
            <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                Comprometidos con la excelencia académica y la formación de líderes educativos en la Amazonía peruana.
            </p>
            
            <!-- Breadcrumb -->
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-blue-200 hover:text-white transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L9 5.414V17a1 1 0 102 0V5.414l5.293 5.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-white md:ml-2">Nosotros</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Quiénes Somos -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        Universidad Nacional Amazónica de 
                        <span class="text-blue-600">Madre de Dios</span>
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Somos una institución de educación superior pública comprometida con la formación integral de profesionales de alta calidad, con sólidos valores éticos y responsabilidad social, capaces de contribuir al desarrollo sostenible de la región amazónica y del país.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        Nuestros programas de postgrado en educación están diseñados para formar líderes educativos que transformen la realidad educativa de nuestra región, promoviendo la innovación pedagógica y el compromiso con la excelencia académica.
                    </p>
                    
                    <!-- Estadísticas -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                            <div class="text-sm text-gray-600">Años de experiencia</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">500+</div>
                            <div class="text-sm text-gray-600">Graduados exitosos</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 mb-2">98%</div>
                            <div class="text-sm text-gray-600">Tasa de empleabilidad</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl transform rotate-3"></div>
                    <div class="relative bg-white rounded-3xl p-1 transform -rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img src="/banner/postgrado.jpg" alt="Universidad UNAMAD" class="w-full h-96 object-cover rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Misión y Visión -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Misión -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Nuestra Misión</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Formar profesionales competentes y éticos en el ámbito educativo, promoviendo la investigación, la extensión universitaria y la responsabilidad social, contribuyendo al desarrollo sostenible de la región amazónica mediante la generación y aplicación del conocimiento científico, tecnológico y humanístico.
                    </p>
                </div>

                <!-- Visión -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Nuestra Visión</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Ser reconocida como una universidad líder en la formación de profesionales en educación en la región amazónica, comprometida con la innovación pedagógica, la investigación científica y la responsabilidad social, contribuyendo significativamente al desarrollo educativo sostenible del país.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valores -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Nuestros Valores</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Los principios que guían nuestro quehacer académico y formativo
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Excelencia -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors duration-300">
                        <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Excelencia</h3>
                    <p class="text-gray-600">Compromiso con la más alta calidad en todos nuestros procesos académicos y formativos.</p>
                </div>
                
                <!-- Integridad -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-green-200 transition-colors duration-300">
                        <svg class="w-10 h-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Integridad</h3>
                    <p class="text-gray-600">Actuamos con honestidad, transparencia y coherencia en todas nuestras acciones.</p>
                </div>
                
                <!-- Innovación -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-purple-200 transition-colors duration-300">
                        <svg class="w-10 h-10 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Innovación</h3>
                    <p class="text-gray-600">Promovemos la creatividad y el pensamiento crítico para generar soluciones educativas.</p>
                </div>
                
                <!-- Responsabilidad Social -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-10 h-10 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Responsabilidad Social</h3>
                    <p class="text-gray-600">Contribuimos al desarrollo sostenible de nuestra región y comunidad.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestro Compromiso -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Nuestro Compromiso</h2>
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
                Nos comprometemos a ofrecer una educación de postgrado de calidad internacional, adaptada a las necesidades de nuestra región amazónica, formando profesionales competentes y comprometidos con el desarrollo sostenible.
            </p>
            
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Calidad Académica</h3>
                    <p class="text-gray-600 text-sm">Programas actualizados y alineados con estándares internacionales de educación superior.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Impacto Social</h3>
                    <p class="text-gray-600 text-sm">Formamos profesionales comprometidos con la transformación positiva de su entorno.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 1a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Metodología Innovadora</h3>
                    <p class="text-gray-600 text-sm">Empleamos enfoques pedagógicos modernos y tecnología educativa avanzada.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">¿Quieres ser parte de nuestra comunidad educativa?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Únete a nosotros y contribuye a la transformación de la educación en la región amazónica.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/catalogo/educacion" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                    Ver Nuestros Programas
                </a>
                <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20la%20universidad" target="_blank" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition duration-300">
                    Contactar Ahora
                </a>
            </div>
        </div>
    </div>
</section>
@endsection