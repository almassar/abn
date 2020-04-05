<ul class="{{ 'category-level-'.$component->level }}">
    @foreach($component->data['categories'] as $node)
        <li>
            @if($component->data['isCheckbox'])
                @if ($node->isLeaf())
                    <input {{ $component->checked($node->id) }} name="categories[]" value="{{ $node->id }}" id="category_id{{ $node->id }}" type="checkbox">
                    <label class="{{ $component->checked($node->id) }}" for="category_id{{ $node->id }}">{{ $node->name }}</label>
                @else
                    {{ $node->name }}
                @endif
            @else
                <a href="{{ $component->url($node) }}">
                    {{ $node->name }}
                </a>
                <span>{{ $node->amount() }}
                </span>

            @endif

            @if (!$node->isLeaf())
                @php($parameters = ['categories'  => $node->children, 'isCheckbox' => $component->data['isCheckbox'],
                                    'repository' => $component->data['repository'],
                                    'categoryIds' => $component->data['categoryIds'],  'prefixUrl' => $component->data['prefixUrl'],
                                    'urlType' => $component->data['urlType'], 'level' => $component->level + 1])

                {!! View::make('components.categories')->with($parameters) !!}
            @endif
        </li>
    @endforeach
</ul>



