
import nltk
import numpy as np

# nltk.download('punkt')

from nltk.stem.porter import PorterStemmer
stemmer = PorterStemmer()


def tokenize(sentence):
    return nltk.word_tokenize(sentence)


def stem(word):
    return stemmer.stem(word.lower())


def bag_of_words(tokenized_sentence, all_words):
    tokenized_sentence = [stem(w) for w in tokenized_sentence]

    bag = np.zeros(len(all_words), dtype=np.float32)
    for idx, w in enumerate(all_words):
        if w in tokenized_sentence:
            bag[idx] = 1.0

    return bag


# # # Bag_of_words
# sentence = ["apa", "how", "are", "you"]
# words = ["hi", "apa", "I", "you", "bye", "thank", "cool"]
# bag = bag_of_words(sentence, words)
# print(bag)

# # # # Tokennize
# # a = "Berapa Lama Pengantarannya?"
# # print(a)
# # a = tokenize(a)
# # print(a)

# # # # Stemming
# words = ["saying", "singing",  "Organizing"]
# stemmed_word = [stem(w) for w in words]
# print(stemmed_word)
