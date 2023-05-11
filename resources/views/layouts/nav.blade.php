<aside>

    <div class="list-group mb-3">
        <a class="list-group-item list-group-item-action" href="{{ route('page.home') }}">Home</a>
    </div>

    <h4>Manage Category</h4>

    <div class="list-group mt-3">
        <a class="list-group-item list-group-item-action" href="{{ route('category.create') }}">Create Category</a>
    </div>
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="{{ route('category.index') }}">Category List</a>
    </div>

    <h4>Manage Item</h4>

    <div class="list-group mt-3">
        <a class="list-group-item list-group-item-action" href="{{ route('item.create') }}">Create Item</a>
    </div>
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="{{ route('item.index') }}">Item List</a>
    </div>
</aside>
