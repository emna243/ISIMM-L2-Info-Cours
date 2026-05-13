import kagglehub
from kagglehub import KaggleDatasetAdapter
import matplotlib.pyplot as plt

df = kagglehub.dataset_load(
    KaggleDatasetAdapter.PANDAS,
    "azeembootwala/titanic",
    "test_data.csv",
)


# Partie 1
print(df.head())
print(df.shape)
print(df.isnull().sum())

print(df["Sex"])
df["Age"] = df["Age"].fillna(df["Age"].mean())
print(df["Sex"])

print(df["Sex"])
df["Sex"] = df["Sex"].map({0: "male", 1: "female"})
print(df["Sex"])

# Partie 2

# histogramm
df["Age"].plot(kind="hist")
plt.show()

# barplot
df["Sex"].value_counts().plot(kind="bar")
plt.show()

# Boxplot
df.boxplot(column="Fare")
plt.show()


# encodage de Pclass(necessaire car my dataset structure et different donc il faut fair un Transformation)
def get_class(row):
    if row["Pclass_1"] == 1:
        return "1"
    if row["Pclass_2"] == 1:
        return "2"
    if row["Pclass_3"] == 1:
        return "3"
    return "Inconnu"


df["Pclass"] = df.apply(get_class, axis=1)

# barplot(bonus)
df.groupby("Pclass")["Fare"].mean().plot(kind="bar")
plt.show()

# Partie 3
df["Sex"].value_counts().plot(kind="bar")
plt.show()
df["Survived"].value_counts().plot(kind="bar")
plt.show()
# 1. no, because there are more dead people than survivors and there are more men than women.

df.boxplot(column="Fare")
plt.show()
# 2. oui, because the boxplot show the extreme values

df.groupby("Pclass")["Fare"].mean().plot(kind="bar")
plt.show()
print(df.groupby("Pclass")["Fare"].mean())
# 3. class 1 paie le plus avec un cout moyenne plus que le somme de le deux autre classes combine.
