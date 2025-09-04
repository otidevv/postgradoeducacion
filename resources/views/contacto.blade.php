@extends('layouts.app')

@section('title', 'Contacto - Postgrado en Educación')
@section('description', 'Contáctanos para obtener información sobre nuestros programas de postgrado en educación. Estamos ubicados en Puerto Maldonado, Madre de Dios.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 text-white py-16">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <div class="relative container mx-auto px-4">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6">
                <span class="text-yellow-400">Contacto</span>
            </h1>
            <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                Estamos aquí para resolver tus dudas y acompañarte en tu proceso de formación académica.
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
                            <span class="ml-1 text-sm font-medium text-white md:ml-2">Contacto</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<!-- Información de Contacto -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Información de contacto -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">¿Cómo podemos ayudarte?</h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            Nuestro equipo está disponible para brindarte toda la información que necesitas sobre nuestros programas de postgrado, procesos de admisión y servicios académicos.
                        </p>
                    </div>

                    <!-- Tarjetas de contacto -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Teléfono -->
                        <div class="bg-blue-50 rounded-2xl p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Teléfono</h3>
                                    <p class="text-blue-600 font-medium text-lg mb-2">+51 992 686 362</p>
                                    <p class="text-sm text-gray-600">
                                        <strong>Horario de atención:</strong><br>
                                        Lunes a Viernes<br>
                                        7:15 AM a 4:15 PM
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="bg-green-50 rounded-2xl p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Correo Electrónico</h3>
                                    <p class="text-green-600 font-medium mb-2 break-all">posgrado-educacion@unamad.edu.pe</p>
                                    <p class="text-sm text-gray-600">
                                        Respuesta en menos de 24 horas
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="bg-emerald-50 rounded-2xl p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">WhatsApp</h3>
                                    <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20programas%20de%20postgrado" target="_blank" class="inline-flex items-center text-emerald-600 font-medium hover:text-emerald-700 transition-colors">
                                        +51 992 686 362
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                    <p class="text-sm text-gray-600 mt-2">
                                        Respuesta inmediata en horarios de oficina
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="bg-purple-50 rounded-2xl p-6 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Ubicación</h3>
                                    <p class="text-purple-600 font-medium mb-1">Universidad Nacional Amazónica de Madre de Dios</p>
                                    <p class="text-sm text-gray-600">
                                        Puerto Maldonado 17001<br>
                                        Madre de Dios, Perú
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA WhatsApp -->
                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-8 text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2">¿Necesitas información inmediata?</h3>
                                <p class="text-green-100">Contáctanos por WhatsApp y te responderemos al instante</p>
                            </div>
                            <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20programas%20de%20postgrado" target="_blank" class="bg-white text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                Escribir ahora
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mapa -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Nuestra Ubicación</h3>
                    <div class="bg-gray-100 rounded-2xl overflow-hidden shadow-lg h-96">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.6499742629659!2d-69.21266460709068!3d-12.588392086394357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b49327851851b%3A0xb4389aa5bd05f178!2sRepositorio%20Institucional%20-%20UNAMAD!5e0!3m2!1ses!2spe!4v1693821234567!5m2!1ses!2spe"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Ubicación Universidad Nacional Amazónica de Madre de Dios">
                        </iframe>
                    </div>
                    <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-600">
                            <strong>Referencia:</strong> La universidad se encuentra en Puerto Maldonado, capital de la región Madre de Dios, en el corazón de la Amazonía peruana.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Horarios y más información -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Horarios de Atención</h2>
            
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            Atención Presencial
                        </h3>
                        <div class="space-y-2 text-gray-600">
                            <p class="font-medium">Lunes a Viernes</p>
                            <p class="text-2xl font-bold text-blue-600">7:15 AM - 4:15 PM</p>
                            <p class="text-sm">Oficinas administrativas</p>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            WhatsApp
                        </h3>
                        <div class="space-y-2 text-gray-600">
                            <p class="font-medium">7 días a la semana</p>
                            <p class="text-2xl font-bold text-green-600">24 horas</p>
                            <p class="text-sm">Respuesta en horarios de oficina</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p class="text-lg text-gray-600 mb-6">
                    ¿Tienes alguna pregunta específica? No dudes en contactarnos. Estamos aquí para ayudarte a dar el siguiente paso en tu formación académica.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/51992686362?text=Hola,%20me%20interesa%20solicitar%20información%20sobre%20los%20programas%20de%20postgrado" target="_blank" class="bg-green-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-green-700 transition duration-300 shadow-lg">
                        Contactar por WhatsApp
                    </a>
                    <a href="mailto:posgrado-educacion@unamad.edu.pe" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-600 hover:text-white transition duration-300">
                        Enviar Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection