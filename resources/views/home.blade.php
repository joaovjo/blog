@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-8">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4">
                    <div class="w-12 h-12 bg-blue-500 dark:bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                    Performance
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Construído para velocidade e eficiência com otimizações modernas.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4">
                    <div class="w-12 h-12 bg-green-500 dark:bg-green-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                    Segurança
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Proteção robusta com as melhores práticas de segurança implementadas.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-gray-100 dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="mb-4">
                    <div class="w-12 h-12 bg-purple-500 dark:bg-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                    Design
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Interface elegante e responsiva com suporte completo a dark mode.
                </p>
            </div>
        </div>

        <!-- Seção de demonstração do Dark Mode -->
        <div
            class="mt-12 bg-linear-to-r from-blue-500 to-purple-600 dark:from-blue-700 dark:to-purple-800 rounded-lg p-8 text-white">
            <h2 class="text-2xl font-bold mb-4">
                Dark Mode Implementado!
            </h2>
            <p class="text-lg mb-4">
                Clique no botão de alternância no canto superior direito para alternar entre os modos claro e escuro.
            </p>
            <ul class="space-y-2">
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Preferência salva no localStorage</span>
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Sem flash (FOUC) ao recarregar</span>
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Respeita preferência do sistema operacional</span>
                </li>
            </ul>
        </div>
    </div>
@endsection