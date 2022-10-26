from os.path import exists

from modelgenerator import generate_model

from customer import Customer

import pandas as pd

from joblib import load
from sklearn.ensemble import RandomForestClassifier

class Predictor:

    def __init__(self, customer):
        self.X = customer.get_as_df()
        self.model_path = './model/model_rf.joblib'

    def add_features(self):
        self.X['total_min'] = self.X['total_day_min'] + self.X['total_eve_min'] + self.X['total_night_minutes'] + self.X['total_intl_minutes']

    def encode(self):
        self.X[['location_code_445', 'location_code_452', 'location_code_547']] = 0
        self.X['location_code_'+str(self.X['location_code'].to_numpy()[0])] = 1
        self.X = self.X.drop(columns=['location_code'])

    def load_model(self):
        if exists(self.model_path):
            self.model = load(self.model_path)
        else:
            generate_model()
            self.load_model()

    def predict(self):
        is_churn = self.model.predict(self.X)
        if 1 in is_churn:
            return 200
        elif 0 in is_churn:
            return 500
        else:
            return 404

    def run_pipeline(self):
        self.add_features()
        self.encode()
        self.load_model()
        return self.predict()
