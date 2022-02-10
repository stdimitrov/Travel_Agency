@csrf

<div class="block">
    <input
        type="file"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="image"
        placeholder="Upload image...">

    <input
        type="varchar"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="name"
        placeholder="Name...">
    <input
        type="varchar"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="title"
        placeholder="title...">
    <input
        type="varchar"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="second_title"
        placeholder="Second title...">

    <input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="overview"
        placeholder="Overview...">
    <input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="description"
        placeholder="Description...">
    <input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="second_description"
        placeholder="Second Description...">

    <input
        type="bigint"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="price_one"
        placeholder="Price one...">
    <label>
        <input
            type="bigint"
            class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
            name="price_two"
            placeholder="Price two...">
    </label>
    <input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="included"
        placeholder="Included...">
    <input
        type="text"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="not_included"
        placeholder="Not included...">

    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
        Submit
    </button>
</div>
