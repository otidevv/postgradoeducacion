@extends('layouts.app')

@section('title', 'Programas en Educación - Postgrado en Educación')
@section('description', 'Descubre nuestros diplomados en educación: Gestión educativa, Herramientas digitales para docentes y Evaluación Formativa.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 text-white py-16">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <div class="relative container mx-auto px-4">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6">
                Programas en 
                <span class="text-yellow-400">Educación</span>
            </h1>
            <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                Transforma tu práctica educativa con nuestros diplomados especializados en las áreas más demandadas del sector educativo.
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
                            <span class="ml-1 text-sm font-medium text-white md:ml-2">Programas en Educación</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Nuestros Diplomados -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nuestros Diplomados</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Desarrolla competencias especializadas con nuestros diplomados diseñados para profesionales de la educación comprometidos con la excelencia.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Gestión Educativa -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group border border-gray-100">
                <div class="h-56 relative overflow-hidden">
                    <img src="/programamas educacion/gestionEducativa.jpg" alt="Gestión Educativa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Diplomado
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Gestión Educativa</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Fortalece tus competencias en liderazgo y administración educativa. Aprende a gestionar instituciones educativas de manera eficiente y estratégica.
                    </p>
                    
                    <!-- Información del curso -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                Fecha de inicio:
                            </span>
                            <span class="font-semibold text-gray-900">19 de Julio, 2025</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                Modalidad:
                            </span>
                            <span class="font-semibold text-gray-900">Semi-presencial</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                Duración:
                            </span>
                            <span class="font-semibold text-gray-900">4 meses</span>
                        </div>
                    </div>
                    
                    <a href="/diplomados/gestion-educativa" class="block w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 text-center">
                        <span class="flex items-center justify-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Herramientas Digitales para Docentes -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group border border-gray-100">
                <div class="h-56 relative overflow-hidden">
                    <img src="/programamas educacion/herramietnasDigitalesDocentes.jpg" alt="Herramientas Digitales para Docentes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Diplomado
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Herramientas Digitales para Docentes</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Domina las tecnologías educativas más actuales. Integra herramientas digitales innovadoras en tu práctica docente para potenciar el aprendizaje.
                    </p>
                    
                    <!-- Información del curso -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                Fecha de inicio:
                            </span>
                            <span class="font-semibold text-gray-900">18 de Julio, 2025</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                Modalidad:
                            </span>
                            <span class="font-semibold text-gray-900">Semi-presencial</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                Duración:
                            </span>
                            <span class="font-semibold text-gray-900">4 meses</span>
                        </div>
                    </div>
                    
                    <a href="/diplomados/herramientas-digitales" class="block w-full bg-green-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-300 text-center">
                        <span class="flex items-center justify-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Evaluación Formativa -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 group border border-gray-100">
                <div class="h-56 relative overflow-hidden">
                    <img src="/programamas educacion/evaluacionFormativa.jpg" alt="Evaluación Formativa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            Diplomado
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Evaluación Formativa</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Revoluciona tus métodos de evaluación. Implementa estrategias de evaluación formativa que potencien el aprendizaje continuo de tus estudiantes.
                    </p>
                    
                    <!-- Información del curso -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                                Fecha de inicio:
                            </span>
                            <span class="font-semibold text-gray-900">18 de Julio, 2025</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                Modalidad:
                            </span>
                            <span class="font-semibold text-gray-900">Semi-presencial</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm">
                            <span class="flex items-center text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                Duración:
                            </span>
                            <span class="font-semibold text-gray-900">4 meses</span>
                        </div>
                    </div>
                    
                    <a href="/diplomados/evaluacion-formativa" class="block w-full bg-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-300 text-center">
                        <span class="flex items-center justify-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">¿Listo para potenciar tu carrera educativa?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Únete a nuestra comunidad de educadores especializados y transforma tu práctica profesional con nuestros diplomados.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20diplomados%20en%20educación" target="_blank" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                    Solicitar Información
                </a>
                <a href="http://aula.unamad.edu.pe/Account/Login?ReturnUrl=%2F" target="_blank" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition duration-300">
                    Acceder al Aula Virtual
                </a>
            </div>
        </div>
    </div>
</section>
@endsection