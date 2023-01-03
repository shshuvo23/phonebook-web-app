<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact, $image, $extension, $directory, $imageName, $imageUrl, $message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'contact-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function createContact($request)
    {
        self::$contact = new Contact();
        self::$contact->name = $request->name;
        self::$contact->email = $request->email;
        self::$contact->number = $request->number;
        self::$contact->image = self::getImageUrl($request);
        self::$contact->save();
    }

    public static function updateContact($request, $id)
    {
        self::$contact = Contact::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$contact->image))
            {
                unlink(self::$contact->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$contact->image;
        }

        self::$contact->name = $request->name;
        self::$contact->email = $request->email;
        self::$contact->number = $request->number;
        self::$contact->image       = self::$imageUrl;;
        self::$contact->save();
    }

    public static function bookmark($id)
    {
        self::$contact = Contact::find($id);
        if (self::$contact->bookmark == 1)
        {
            self::$contact->bookmark = 0;
            self::$message = 'Remove from Bookmark';
        }
        else
        {
            self::$contact->bookmark = 1;
            self::$message = 'Added to Bookmark';
        }
        self::$contact->save();
        return self::$message;
    }

}
