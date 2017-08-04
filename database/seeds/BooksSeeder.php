<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample penulis
        $author1 = Author::create(['name'=>'Mohammad Fauzi Adhim']);
        $author2 = Author::create(['name'=>'salim A. Fillah']);
        $author3 = Author::create(['name'=>'Aam Amiruddin']);

        //Sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau dengan Hamdalah','amount'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan Cinta Para pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Membingkai surga dalam Rumah Tangga','amount'=>4,'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Cinta $ seks Rumah Tangga Muslim','amount'=>3,'author_id'=>$author3->id]);
    }
}
