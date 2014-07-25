<?php

use Psyao\Resume\Languages\Language;
use Psyao\Resume\Languages\LanguageRepository;

class LanguagesTableSeeder extends Seeder
{
    /**
     * @var LanguageRepository
     */
    protected $languageRepository;

    function __construct(LanguageRepository $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function run()
    {
        DB::table('languages')->truncate();

        $languages = Config::get('psyao.languages');

        foreach ($languages as $language)
        {
            $this->saveLanguage($language);
        }
    }

    /**
     * @param array $language
     */
    private function saveLanguage(array $language)
    {
        $this->languageRepository->save(
            Language::learn(
                $language['name'],
                $language['understanding'],
                $language['speaking'],
                $language['writing'],
                $language['mother_tongue']
            )
        );
    }

}
