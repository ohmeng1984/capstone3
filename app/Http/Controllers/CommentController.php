<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notifications\RepliedToThread;
use App\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addThreadComment(Request $request, Thread $thread)
    {
        //Validate
        $this->validate($request, [
                'body' => 'required',
<<<<<<< HEAD
                'cover_image' => 'image|nullable|max:1999'
        ] );



=======
        ] );

>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
/*        $comment=new Comment();
        $comment->body=$request->body;
        $comment->user_id=auth()->user()->id;

        $thread->comments()->save($comment);*/

<<<<<<< HEAD
        $thread->addComment($request);
=======
        $thread->addComment($request->body);
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676

        $thread->user->notify(new RepliedToThread($thread));

        return back()->with('success', 'Comment Added');
    }

    public function addReplyComment(Request $request, Comment $comment)
    {
        //Validate
        $this->validate($request, [
                'body' => 'required',
<<<<<<< HEAD
                'cover_image' => 'image|nullable|max:1999'
=======
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
        ] );

/*        $reply=new Comment();
        $reply->body=$request->body;
        $reply->user_id=auth()->user()->id;

        $comment->comments()->save($reply);*/

<<<<<<< HEAD
        $comment->addComment($request);
=======
        $comment->addComment($request->body);
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676

        return back()->with('success', 'Reply Added');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        if(auth()->user()->id!==$comment->user_id)
        {
            return back()->with('error', 'Not Authorized!');
        }
        $this->validate($request, [
                'body' => 'required',
        ] );

        $comment->update($request->all());

        return back()->with('success', 'Comment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if(auth()->user()->id!==$comment->user_id)
        {
            return back()->with('error', 'Not Authorized!');
        }
        $comment->delete();
        return back()->with('success', 'Comment/Reply Deleted');
    }
}
