<div x-data="listItems()" class="bg-neutral-700 py-6 px-4">
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
        function listItems() {
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



<div x-data="listItems()" class="bg-neutral-700 flex flex-row">
    <div class="flex flex-col w-1/2">
        <span class="text-white text-lg font-bold">Preguntas frecuentes</span>
        <p class="text-white text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in error.
        </p>
        <button class="flex justify-center items-center py-1 px-4 text-black bg-gray-50">Ver más preguntas</button>
    </div>
    <div class="mx-auto w-1/2 px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
        <template x-for="(item, index) in items" :key="index">
            <dl class="mt-10 space-y-6 divide-y divide-white">
                <div class="pt-6">
                    <dt>
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                            <span class="text-base font-semibold leading-7" x-text="item.question"></span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>

                                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-0">
                        <p class="text-base leading-7 text-gray-600" x-text="item.answer"></p>
                    </dd>
                </div>
            </dl>
        </div>
        </template>
    </div>

</div>