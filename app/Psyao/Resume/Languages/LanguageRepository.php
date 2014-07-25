<?php namespace Psyao\Resume\Languages;

/**
 * Class LanguageRepository
 *
 * @package Psyao\Languages
 */
class LanguageRepository
{
    /**
     * Get all the languages.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return Language::all();
    }

    /**
     * Persist a new language.
     *
     * @param Language $language
     *
     * @return mixed
     */
    public function save(Language $language)
    {
        return $language->save();
    }
} 