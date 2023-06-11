<div x-data="listFaqsRoom()" class="py-12 px-28 relative mt-24">
    <div class="px-8">
        <hr class="border-t-2 border-gray-50 my-2">
        <template x-for="(question, index) in questions" :key="index">
            <div class="flex flex-row justify-between items-center pb-4 p-4 border-b-2 border-gray-50">
                <div>
                    <h3 class="text-md font-bold"  x-text="question.title"></h3>
                    <p class="text-sm mt-1"  x-show="question.open" x-text="question.answer"></p>
                </div>
                <div class="mr-2">
                    <button @click="question.open = !question.open">
                        <ion-icon x-show="!question.open" name="chevron-down-outline"></ion-icon>
                        <ion-icon x-show="question.open" name="chevron-up-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </template>
    </div>
    <script>
        function listFaqsRoom() {
            const questions = [
                {
                    title: "Condiciones de alquiler",
                    answer: "Respuesta a la pregunta 1.",
                    open: false
                },
                {
                    title: "Habitación",
                    answer: "Respuesta a la pregunta 2.",
                    open: false
                },
                {
                    title: "Facturas",
                    answer: "Respuesta a la pregunta 3.",
                    open: false
                },
                {
                    title: "Raparaciones",
                    answer: "Respuesta a la pregunta 3.",
                    open: false
                },
                {
                    title: "Normas",
                    answer: "Respuesta a la pregunta 3.",
                    open: false
                },
                {
                    title: "Check-in",
                    answer: "Respuesta a la pregunta 3.",
                    open: false
                },
            ];

            return {
                questions,
            };
        }
    </script>
</div>
