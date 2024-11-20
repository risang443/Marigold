@include('landing.head')
<body class="min-h-sceen flex flex-col">
    @include('landing.pages.navbar')
    <div class="h-full flex flex-col justify-between items-center gap-10 mt-10">
        <!-- Product Card 1 -->
        <div class="bg-grey w-[1400px] h-[330px] px-8 flex items-center rounded-3xl gap-16">
            <div class="w-[300px] h-[300px] rounded-3xl">
                <img class="w-full h-auto object-contain rounded-3xl" src="{{ asset('image/kamari.jpg') }}" alt="Marigolds Logo">
            </div>
            <div class="flex justify-between w-[1000px]">
                <div class="flex flex-col w-[500px] h-[150px] gap-8">
                    <h1 class="font-bold text-3xl">Kaka Mary</h1>
                    <h1>Teh alami dari bunga marigold pilihan yang kaya manfaat bagi kesehatan tubuh dan memberi efek relaksasi alami. </h1>
                </div>
                <div class="flex flex-col items-center gap-5">
                    <h class="text-2xl font-semibold item-price" data-price="5.00">$5.00</h>
                    <div>
                        <button class="minus-btn border border-black rounded-md"><i class="fi fi-rr-minus-small text-xl"></i></button>
                        <input type="number" value="0" class="quantity-input w-16" />
                        <button class="plus-btn border border-black rounded-md"><i class="fi fi-rr-plus-small text-xl"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-grey w-[1400px] h-[330px] px-8 flex items-center rounded-3xl gap-16">
            <div class="w-[300px] h-[300px] rounded-3xl">
                <img class="w-full h-auto object-contain rounded-3xl" src="{{ asset('image/kamori.jpg') }}" alt="Marigolds Logo">
            </div>
            <div class="flex justify-between w-[1000px]">
                <div class="flex flex-col w-[500px] h-[150px] gap-8">
                    <h1 class="font-bold text-3xl">Kaka Mory</h1>
                    <h1>Teh alami dari bunga marigold pilihan yang kaya manfaat bagi kesehatan tubuh dan memberi efek relaksasi alami. </h1>
                </div>
                <div class="flex flex-col items-center gap-5">
                    <h class="text-2xl font-semibold item-price" data-price="5.00">$5.00</h>
                    <div>
                        <button class="minus-btn border border-black rounded-md"><i class="fi fi-rr-minus-small text-xl"></i></button>
                        <input type="number" value="0" class="quantity-input w-16" />
                        <button class="plus-btn border border-black rounded-md"><i class="fi fi-rr-plus-small text-xl"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Section -->
        <div class="bg-purple w-full h-[200px]">
            <div class="flex justify-between px-60 items-center h-full">
                <div class="text-white font-semibold text-xl">
                    <h1>Total items: <span id="total-items">0</span></h1>
                    <h1>Total items Quantity: <span id="total-quantity">0</span></h1>
                    <h1>Total: $<span id="total-price">0.00</span></h1>
                </div>
                <div>
                    <button class="bg-yellow w-[160px] h-[45px] rounded-md text-white font-semibold">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    @include('landing.jsscript')
    <script>
        // Function to update totals
        function updateTotals() {
            const quantities = document.querySelectorAll('.quantity-input');
            const prices = document.querySelectorAll('.item-price');

            let totalItems = 0;
            let totalQuantity = 0;
            let totalPrice = 0;

            quantities.forEach((input, index) => {
                const quantity = Number(input.value) || 0;
                const price = Number(prices[index].dataset.price);

                if (quantity > 0) totalItems += 1;
                totalQuantity += quantity;
                totalPrice += quantity * price;
            });

            document.getElementById('total-items').textContent = totalItems;
            document.getElementById('total-quantity').textContent = totalQuantity;
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        }

        // Event listener for plus and minus buttons
        document.addEventListener('click', (event) => {
            const button = event.target.closest('.minus-btn, .plus-btn'); // Detect minus or plus button
            if (!button) return; // Exit if the click is not on these buttons

            const container = button.closest('div'); // Find the parent container
            const inputField = container.querySelector('.quantity-input'); // Get the associated input field

            if (!inputField) return;

            const currentValue = Number(inputField.value) || 0;

            if (button.classList.contains('minus-btn') && currentValue > 0) {
                inputField.value = currentValue - 1; // Decrease the value
            } else if (button.classList.contains('plus-btn')) {
                inputField.value = currentValue + 1; // Increase the value
            }

            // Update totals after any button click
            updateTotals();
        });
    </script>
</body>
