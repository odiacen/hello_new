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
    <script>
        function listItems() {
            const items = [
                {
                    question: 'Pregunta ejemplo 1',
                    answer: 'Respuesta ejemplo 1'
                },
                {
                    question: 'Pregunta ejemplo 2',
                    answer: 'Respuesta ejemplo 2'
                },
                {
                    question: 'Pregunta ejemplo 3',
                    answer: 'Respuesta ejemplo 3'
                },
                {
                    question: 'Pregunta ejemplo 4',
                    answer: 'Respuesta ejemplo 4'
                },
            ];

            return {
                items,
            };
        }
    </script>
</div>