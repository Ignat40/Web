<?php 


// One To One 
// F.e. one user has one phone 

class User1
{
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}

class Phone 
{
    public function user()
    {
        return $this->belongsTo(User1::class);
    }
}

// One To Many -> one model owns multiple instances of another model
// F.e. one post has many commnets

class Post 
{
    public function commnets()
    {
        return $this->hasMany(Comment::class);
    }
}

class Comment 
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

// Many To Many -> requires a pivot table.
// F.e. A user can have many roles and a role can belong to multliple users 

class User2
{
    public function role()
    {
        return $this-> belongsToMany(Role::class); 
    }
}

class Role 
{
    public function users()
    {
        return $this-> belongsToMany(User2::class);
    }
}

// Pivot table migrations 
Schema::create('role_user', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('role_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});
