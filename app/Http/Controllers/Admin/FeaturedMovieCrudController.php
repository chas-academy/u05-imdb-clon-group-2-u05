<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeaturedMovieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Movie;

/**
 * Class FeaturedMovieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FeaturedMovieCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\FeaturedMovie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/featured-movies');
        CRUD::setEntityNameStrings('featured movie', 'Featured movies');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->setTitle('some string', 'create');

        CRUD::addColumn(['name' => 'id', 'type' => 'string', 'label' => 'Movie', 'wrapper' => [     //Fetch movie title from movie id
           function ($crud, $column, $entry, $related_key) { 
               echo $this->getMovieTitle($entry->movie_id) . ' - ';
            }
        ]]); 

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FeaturedMovieRequest::class);

        CRUD::addField([   // select_from_array
            'name'        => 'movie_id',
            'label'       => "Movie",
            'type'        => 'select_from_array',
            'options'     => $this->getMovies(),
            'allows_null' => false,
            'default'     => 'one',
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    private function getMovies() 
    {
        $movieIDs = Movie::All()->map(function($movie) {
            return $movie->id;
        })->toArray();

        $movies = Movie::All()->map(function($movie) {
            return $movie->name;
        })->toArray();

        return array_combine($movieIDs, $movies);
    }

    private function getMovieTitle($id)
    {
        $title = Movie::where('id', $id)->first();
        return $title->name;
    }
}
