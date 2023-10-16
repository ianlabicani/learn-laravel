            $table->id();
            $table->string('name');
            $table->integer('qty');
            $table->decimal('price');
            $table->text('description');
            $table->timestamps();
        });
