<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{ trans('tomato-roles::global.users.single') }} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.users.update', $model->id)}}" method="post" :default="$model">

        @include('tomato-ketchup::components.form', ['fields' => $fields])
        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{trans('tomato-roles::global.users.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
