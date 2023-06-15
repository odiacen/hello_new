<div class="py-12 lg:px-28 px-10 relative lg:mt-12 mt-8">
    <div class="px-8">
        <hr class="border-t-2 border-gray-50 my-2">
        <template x-for="(question, index) in questions" :key="index">
            <div class="flex relative flex-row justify-between items-center pb-4 p-4 border-b-2 border-gray-50">
                <div class="flex flex-col">
                    <h3 class="text-md font-bold"  x-text="question.title"></h3>
                    <div class="mt-4" x-show="question.open">
                        
                        <ul class="p-1 text-black text-sm text-justify mt-2 custom-list" >
                            
                                <li x-html="questionlist[index]">
                                </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="mr-2 absolute top-0 right-0">
                    <button @click="question.open = !question.open">
                        <ion-icon x-show="!question.open" name="chevron-down-outline"></ion-icon>
                        <ion-icon x-show="question.open" name="chevron-up-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </template>
    </div>

    <style>
        .custom-list {
            list-style-type: none;
            padding: 0;
        }

        .custom-list li {
            position: relative;
            padding-left: 20px;
            line-height: 1.5;
        }

        .custom-list li::before {
            content: "•";
            color:  #91dfe4;
            position: absolute;
            left: 0;
            bottom: 3px;
            font-size: 20px;
        }
    </style>
</div>
