<div x-data="listFaqs()" class="bg-neutral-700 py-12 px-32 relative mt-24">
    <img class="absolute w-32 h-32 top-0 right-0" src="https://www.helloflatmate.com/img/img/vector.png"/>
    <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-6">
        <div class="px-12">
            <h2 class="text-white lg:text-2xl text-xl font-bold mb-4">Preguntas frecuentes</h2>
            <p class="text-white mb-4 lg:text-md text-sm text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in error.</p>
            <button class="bg-white text-md text-gray-900 fond-bold py-2 px-4 rounded-full">Ver más preguntas</button>
        </div>
        <div class="px-8">
            <hr class="border-t-2 border-gray-50 my-2">
            <template x-for="(question, index) in questions" :key="index">
                <div :class="{'bg-white': question.open, 'bg-neutral-700': !question.open}" class="flex flex-row justify-between items-center pb-4 p-4 border-b-2 border-gray-50">
                    <div>
                        <h3 class="text-md font-bold" :class="{'text-black': question.open, 'text-white': !question.open}" x-text="question.title"></h3>
                        <p class="text-sm mt-1" :class="{'text-black': question.open, 'text-white': !question.open}" x-show="question.open" x-text="question.answer"></p>
                    </div>
                    <div class="mr-2">
                        <button :class="{'text-black': question.open, 'text-white': !question.open}" @click="question.open = !question.open">
                            <svg x-show="!question.open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle w-6 h-6">
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                            <svg x-show="question.open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle w-6 h-6">
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <script>
        function listFaqs() {
            const questions = [
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
                questions,
            };
        }
    </script>
</div>
