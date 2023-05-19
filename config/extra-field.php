<?php

return [

    /*
     * The class name of the extra model that holds all extras.
     *
     * The model must be or extend `TMSLLC\ExtraField\Extra`.
     */
    'extra_model' => TMSLLC\ExtraField\Extra::class,

    /*
     * The class name of the extra value model that holds all values.
     *
     * The model must be or extend `TMSLLC\ExtraField\ExtraValue`.
     */
    'extra_value_model' => TMSLLC\ExtraField\ExtraValue::class,

    /*
     * The name of the column which holds the ID of the model related to the extra values.
     *
     * You can change this value if you have set a different name in the migration for the extra_values table.
     */
    'model_primary_key_attribute' => 'model_id',


    /*
     * The name of the column which holds the Class Name of the model related to the extras.
     *
     * You can change this value if you have set a different name in the migration for the extras table.
     */
    'model_name_attribute' => 'model_class',
];
