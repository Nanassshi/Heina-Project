<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Mime\Header\get;

class ReviewController extends Controller
{
    public function AddReview(Request $request){
        $review_content = $request->review;
        if($review_content != 0){
            $userId = auth()->user()->getAuthIdentifier();
            $reviews = new Review();
            $reviews->review = $review_content;
            $reviews->user_id = $userId;
            $reviews->save();
            return redirect()->intended('/hiena');
        }
        return redirect('/hiena');
    }

    public function showReview(){
        $reviews = Review::query()->orderBy('created_at', 'desc')->get();
        foreach($reviews as $review){
            $userId = $review->user_id;
            $user = User::where('id', $userId)->first();
            $review->nickname = $user->name;
            if(empty($user->img)){
                $user->img = "https://cdn-icons-png.flaticon.com/512/147/147285.png";
            }
            $review->avatar = $user->img;

        }
        return view('pages.hiena', ['reviews' => $reviews]);
    }
}
