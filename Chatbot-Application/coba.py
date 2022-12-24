import numpy as np
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory

factory = StemmerFactory()
stemmer = factory.create_stemmer()


def stem(word):
    return stemmer.stem(word.lower())


def bag_of_words(tokenized_sentence, all_words):
    tokenized_sentence = [stem(w) for w in tokenized_sentence]

    bag = np.zeros(len(all_words), dtype=np.float32)
    for idx, w in enumerate(all_words):
        if w in tokenized_sentence:
            bag[idx] = 1.0

    return bag


# # # # Bag_of_words
# sentence = ["apa", "kabar", "kamu"]
# words = ["apa", "kabar", "saya", "dia", "bye", "thank", "cool"]
# bag = bag_of_words(sentence, words)
# print(bag)


words = ["menulis", "memukul",  "termarahi", "menendang"]
stemmed_word = [stem(w) for w in words]
print(stemmed_word)
