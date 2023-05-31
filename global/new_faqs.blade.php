<div x-data="listFaqs()" class="bg-neutral-700 py-6 px-4">
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h2 class="text-white text-xl font-bold mb-4">Preguntas frecuentes</h2>
            <p class="text-white mb-4">Aquí encontrarás respuestas a las preguntas más comunes.</p>
            <button class="bg-white text-neutral-700 py-2 px-4 rounded-md shadow-sm">Ver más preguntas</button>
        </div>
        <div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <template x-for="(question, index) in questions" :key="index">
                    <div class="flex items-start mb-4">
                        <div class="mr-2">
                            <button @click="question.open = !question.open">
                                <svg x-show="!question.open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle w-6 h-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <svg x-show="question.open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle w-6 h-6">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <h3 class="font-medium" x-text="question.title"></h3>
                            <p class="text-sm text-gray-500 mt-1" x-show="question.open" x-text="question.answer"></p>
                        </div>
                    </div>
                    <hr class="border-gray-200 my-2" x-show="index !== questions.length - 1">
                </template>
            </div>
        </div>
    </div>
    <script>
        function listFaqs() {
            const items = [
                {
                    title: "¿Pregunta 1?",
                    answer: "Respuesta a la pregunta 1.",
                    open: false
                },
                {
                    title: "¿Pregunta 2?",
                    answer: "Respuesta a la pregunta 2.",
                    open: false
                },
                {
                    title: "¿Pregunta 3?",
                    answer: "Respuesta a la pregunta 3.",
                    open: false
                }
            ];

            return {
                items,
            };
        }
    </script>
</div>