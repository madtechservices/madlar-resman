<x-splade-input :name="$field->name" :type="$field->type"   :placeholder="$field->label ?: ucfirst(str_replace('_',' ',$field->name))" :label="$field->label ?: ucfirst(str_replace('_',' ',$field->name))" required="{{$field->required}}"/>
