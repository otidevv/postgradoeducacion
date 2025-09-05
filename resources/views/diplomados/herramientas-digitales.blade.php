@extends('layouts.app')

@section('title', 'Diplomado en Herramientas Digitales para Docentes - Postgrado en Educación')
@section('description', 'Desarrolla competencias digitales para la educación con nuestro diplomado especializado en herramientas digitales orientadas a todos los niveles educativos.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-green-900 via-green-800 to-teal-900 text-white py-16">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <div class="relative container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                Diplomado en 
                <span class="text-yellow-400">Herramientas Digitales para Docentes</span>
            </h1>
            
            <!-- Información clave -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-green-200">INICIO</span>
                    </div>
                    <p class="text-lg font-semibold">18 de Julio, 2025</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-green-200">DURACIÓN</span>
                    </div>
                    <p class="text-lg font-semibold">4 meses</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                        </svg>
                        <span class="text-sm text-green-200">HORAS</span>
                    </div>
                    <p class="text-lg font-semibold">575 horas</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-green-200">INVERSIÓN</span>
                    </div>
                    <p class="text-lg font-semibold">S/. 700</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Presentación -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Presentación</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                El Diplomado en herramientas digitales para docente es un programa de formación que tiene como objetivo formar competencias digitales en los profesionales vinculados a educación a través del conocimiento y práctica de herramientas digitales que se adecúen a las necesidades de todos los niveles educativos y se den cuenta de que a futuro tendremos que usar las plataformas y quizás recurrir más a una educación mixta, es decir, presencial y semipresencial.
            </p>
        </div>
    </div>
</section>

<!-- Contenido del programa -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Contenido</h2>
            
            <div class="space-y-4">
                <!-- Módulo I -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            I
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo I</h4>
                            <p class="text-gray-700">Creación de contenidos y presentaciones interactivas.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Módulo II -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            II
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo II</h4>
                            <p class="text-gray-700">Herramientas educativas digitales de gamificación.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Módulo III -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            III
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo III</h4>
                            <p class="text-gray-700">Plataformas digitales educativas.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Módulo IV -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            IV
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo IV</h4>
                            <p class="text-gray-700">Uso y aplicación de portafolios digitales.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Módulo V -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            V
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo V</h4>
                            <p class="text-gray-700">Recursos digitales para la optimización del trabajo docente.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Módulo VI -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6 flex items-center">
                        <div class="w-12 h-12 bg-green-600 text-white rounded-full flex items-center justify-center font-bold mr-4 flex-shrink-0">
                            VI
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Módulo VI</h4>
                            <p class="text-gray-700">Herramientas digitales con inteligencia artificial (IA).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dirigido a y Requisitos -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Dirigido a -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                        Dirigido a
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Docentes de todos los niveles.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Profesionales de las distintas carreras que deseen adecuar sus conocimientos a herramientas digitales orientadas a la educación.</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Requisitos -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-8 h-8 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 0a1 1 0 100 2h.01a1 1 0 100-2H9zm2 0a1 1 0 100 2h.01a1 1 0 100-2H11z" clip-rule="evenodd"/>
                        </svg>
                        Requisitos
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8.586A2 2 0 0116 2.586L19.414 6A2 2 0 0120 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Copia simple del grado de bachiller o título profesional del Instituto Superior.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Fotocopia del DNI o carnet de extranjería.</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 0a1 1 0 100 2h.01a1 1 0 100-2H9zm2 0a1 1 0 100 2h.01a1 1 0 100-2H11z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Constancia de inscripción a SUNEDU (caso que sea de universidad).</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">2 fotos tamaño carnet.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Duración, Horarios e Inversión -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-teal-100 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">Duración</h3>
                    </div>
                    <p class="text-xl font-semibold text-green-800">4 meses</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-50 to-cyan-100 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-teal-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">Horarios</h3>
                    </div>
                    <div class="space-y-2">
                        <p class="text-gray-700">
                            <span class="font-semibold">Viernes:</span> 16:00 - 22:00 horas
                        </p>
                        <p class="text-gray-700">
                            <span class="font-semibold">Sábado:</span> 16:00 - 22:00 horas
                        </p>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-pink-100 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-purple-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">Inversión</h3>
                    </div>
                    <div class="space-y-3">
                        <p class="text-sm font-medium text-purple-800 mb-3">Banco de la Nación y/o Caja de Pago UNAMAD</p>
                        
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Matrícula:</span>
                                <span class="font-semibold text-gray-900">S/ 100.00</span>
                            </div>
                            <p class="text-xs text-gray-500">(Código pago: 494)</p>
                        </div>
                        
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Costo Total:</span>
                                <span class="font-bold text-purple-800 text-lg">S/ 510.00</span>
                            </div>
                        </div>
                        
                        <div class="space-y-2 pt-2 border-t border-purple-200">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Mensualidad x 4:</span>
                                <span class="font-semibold text-gray-900">S/ 127.50</span>
                            </div>
                            <p class="text-xs text-gray-500">(Código pago: 610)</p>
                        </div>
                        
                        <div class="space-y-2 pt-2 border-t border-purple-200">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700">Diploma:</span>
                                <span class="font-semibold text-gray-900">S/ 90.00</span>
                            </div>
                            <p class="text-xs text-gray-500">(Código pago: 627)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Inscripción -->
<section class="py-16 bg-gradient-to-r from-green-600 to-teal-700 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">¡Inscríbete al DIPLOMADO EN EDUCACIÓN!</h2>
            <p class="text-xl mb-4">Diplomados EN EDUCACIÓN</p>
            <p class="text-lg mb-8 text-green-100">
                Inscríbete registrando tus datos personales en este formulario.<br>
                Además, debe subir los documentos solicitados en formato PDF.
            </p>
            
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfj-aT5tb8wOD_Lm6FMppwjcWxb0YCruY49QIBTrikxkEVvmQ/viewform" target="_blank" class="inline-flex items-center bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-300 transition duration-300 shadow-lg">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                </svg>
                Completar Formulario de Inscripción
            </a>
        </div>
    </div>
</section>
@endsection